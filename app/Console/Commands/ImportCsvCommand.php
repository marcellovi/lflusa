<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportCsvCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:csv {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import CSV file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filePath = $this->argument('file');

        if (!file_exists($filePath)) { // Check if the file exists
            $this->error("The file at {$filePath} does not exist."); // Output an error message
            return 1; // Indicate failure
        }

        $fileHandle = fopen($filePath, 'r'); // Open the CSV file for reading

        if ($fileHandle === false) { // Handle potential file opening errors
            $this->error("Could not open the file at {$filePath}.");
            return 1;
        }

        // Read the header row
        $header = fgetcsv($fileHandle);
        $header[0] = trim($header[0], "\xEF\xBB\xBF"); // remove \ufeff from a string

        // Loop through the rest of the rows
        while (($rowData = fgetcsv($fileHandle)) !== false) {
            // Process the row data here
            // Example: Associate header with row data to create an associative array
            $data = array_combine($header, $rowData);

            print_r('------raw-----------');
            print_r($data);
            if(trim($data["Idioma"]) == 'Portugues')
                $data["Idioma"] = 1;
            else if(trim($data["Idioma"]) == 'Ingles')
                $data["Idioma"] = 2;
            else
                $data["Idioma"] = 3;

            if(trim($data["Categoria"]) == 'Estudos')
                $data["Categoria"] = 'messages.study';
            else if(trim($data["Categoria"]) == 'Venda')
                $data["Categoria"] = 'messages.sell';
            else if(trim($data["Categoria"]) == 'Emprestimo')
                $data["Categoria"] = 'messages.rent';
            else
                $data["Categoria"] = 'messages.study';

            if(empty(trim($data['Pelo Espirito'])))
                $data['Pelo Espirito']  = 58;

            $data['Preco'] = str_replace('$', '', trim($data['Preco']));
            $data['Preco'] = str_replace('.00', '', trim($data['Preco']));
            if(empty(trim($data['Preco'])))
                $data['Preco']  = 999.99;

            if(empty(trim($data['Edicao'])) || trim($data['Edicao']) == "N/A" )
                $data['Edicao']  = 0;

            if(empty(trim($data['Autor']))){
                $data['Autor']  = 150;
            }else{
                $author_id = DB::table('Authors')->select('id')->where('name', trim($data['Autor']))->first();
                $data['Autor'] = $author_id->id;
            }

            if(empty(trim($data['Editora'])) || trim($data['Editora']) == "N/A" || trim($data['Editora']) == "-"){
                $data['Editora']  = 148;
            }else{
                $publisher_id = DB::table('Publishers')->select('id')->where('name', trim($data['Editora']))->first();
                $data['Editora'] = $publisher_id->id;
            }

            print_r('------updated-----------');
            print_r($data);

            $exist = DB::table('books')
                ->select('id','copies')
                ->where('title', trim($data['Titulo']))
                ->where('author_id', trim($data['Autor']))
                ->where('publisher_id', trim($data['Editora']))
                ->where('language_id', trim($data['Idioma']))
                ->where('edition', trim($data['Edicao']))
                ->where('type',trim($data['Categoria']));


            // increment number of copies if already exists
            if($exist->count()){
                $exist->increment('copies',1);
            }else{
                DB::table('books')->insert(
                 ['title' => trim($data['Titulo']),
                        'type' => trim($data['Categoria']),
                        'edition' => trim($data['Edicao']),
                        'price' => trim($data['Preco']),
                        'copies' => 1,
                        'spirit_id' => trim($data['Pelo Espirito']),
                        'language_id' => trim($data['Idioma']),
                        'author_id' => trim($data['Autor']),
                        'publisher_id' => trim($data['Editora']),
                        'created_at' => date('Y-m-d'),
                 ]);
            }

           // dd($data);

            // You can then use this $data to perform actions like:
            // - Inserting into a database using your Laravel models
            // - Doing other data manipulations
        }

        fclose($fileHandle); // Close the file handle

        $this->info("CSV file processed successfully."); // Output a success message

        return 0; // Indicate success


    }
}

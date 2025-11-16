@extends('base.front_base')

@section('style')
    <style>

        body {
           -- margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 1100px;
            margin: 0 auto;
        }

    </style>
@endsection

@section('scripts')
    <script src='{{ asset('assets/js/calendar/index.global.js') }}'></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                initialDate: Date.now(),
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                selectable: true,
                events:
                    @php echo $events;  @endphp

            });

            calendar.render();
        });

    </script>
@endsection

@section('content')

    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div id='calendar'></div>
            </div>
        </div>
    </section>

@endsection

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
                initialDate: '2025-10-01',
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                selectable: true,
                events: [
                    {
                        title: "Grupo Irmã Scheilla: Irradiação em português",
                        start: "2025-10-02T20:00",
                        color: '#257e4a'
                    },
                    {
                        title: "Curso: noções básicas da doutrina",
                        start: "2025-10-02T20:30",
                        color: '#257e4a'
                    },
                    {
                    title: "Grupo Irmã Scheilla: Irradiação em português",
                    start: "2025-10-03T20:00",
                    color: '#257e4a'
                    },
                    {
                    title: "Fraternity on the streets @ Rosemary Place",
                    start: "2025-10-04T08:30",
                    color: '#257e4a'
                    },
                    {
                    title: "Blood Drive @ LFL",
                    start: "2025-10-05T09:00",
                    color: '#257e4a'
                    },
                    {
                    title: "SLiDS Group: the spirits’ book in english",
                    start: "2025-10-04T15:00",
                    color: '#257e4a'
                    },
                    {
                    title: "Reunião Publica é evangelização infantil @ LFL",
                    start: "2025-10-05T10:30",
                    color: '#257e4a'
                    },
                    {
                    title: "Passe @ LFL",
                    start: "2025-10-05T11:30",
                    color: '#257e4a'
                    },
                    {
                    title: "Grupo Irmã Scheilla: Irradiação em português",
                    start: "2025-10-06T20:00",
                    color: '#257e4a'
                    },
                    {
                    title: "Mentora Scheilla & Ermance Dufaux: Illumination Sessiom in english",
                    start: "2025-10-07T20:00",
                    color: '#257e4a'
                    },
                    {
                    title: "Grupo Irmã Scheilla: Irradiação em português",
                    start: "2025-10-09T20:00",
                    color: '#257e4a'
                    },
                    {
                    title: "Grupo Irmã Scheilla: Irradiação em português",
                    start: "2025-10-10T20:00",
                    color: '#257e4a'
                    },
                    {
                    title: "SLiDS Group: the spirits’ book in english",
                    start: "2025-10-11T15:00",
                    color: '#257e4a'
                    }
                ]
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

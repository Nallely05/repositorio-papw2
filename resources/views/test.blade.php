@extends('layouts.master')
@section('title','Perfil')
@section('contenido')
        <span id="data-01">hola</span>
        <span id="data-02">otra cosa</span>
    </body>
    <script>
        $(document).ready(function()
        {
            // Instance the tour
            var tour = new Tour({
                steps: [
                    {
                        element: "#data-01",
                        title: "Title of my step",
                        content: "Content of my step"
                    },
                    {
                        element: "#data-02",
                        title: "Title of my step",
                        content: "Content of my step"
                    }
                ]
            });

            // Initialize the tour
            tour.init();

            // Start the tour
            tour.start();
        });
    </script>
@stop
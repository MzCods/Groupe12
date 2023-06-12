@extends('layouts.appadmin')
@section('title')
    Dashboard
@endsection
@section('contenu')
    <!-- Navbar Start -->

    <!-- Navbar End -->

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
         
        </div>
    </div>

    <!-- Sales Chart Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
           
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Matricule Disponible</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Matricule</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Chauffeurs</h6>
                    <div class="owl-carousel testimonial-carousel">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

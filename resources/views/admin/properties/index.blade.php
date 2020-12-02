<!-- pagina principale -->
@extends('layouts.main')

@include('layouts.header-general')

@section('mainContent')
<div class="container">

    <div class="container">
        <div class="row p_t_b_50">
            <div class="container">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    @if(is_array(session('success')))
                        <ul>
                            @foreach (session('success') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @else
                        {{ session('success') }}
                @endif
            </div>
            @endif

            <div class="bottoni-admin">
            <!-- bottone per creare annuncio appartamento -->
                <a class="btn modifing_link" id="admin-btn" href="{{route("admin.properties.create")}}">Aggiungi appartamento</a>
            <!-- /bottone per creare annuncio appartamento -->

            <!-- bottone per messaggi -->
            <a class="btn modifing_link admin-btn">Visualizza i tuoi messaggi</a>
            <!-- /bottone per messaggi -->
            </div>
            
            <h1>I miei appartamenti</h1>
            <ul class="flat_list">
                {{-- Stampa della lista degli appartamenti --}}
            @foreach ($properties as $property)
            <li class="card-list">
            <div class="card-box">
                <img class="card-img-top" src="{{asset('storage/'.$property->flat_image)}}" alt="House Image">
                <div>
                    <h5 class="card-title text_center">{{$property->title}}</h5>
                </div>
                <div class="text_center">
                    <a class="btn modifing_link" href="{{route('admin.properties.show', $property)}}" class="card-link">Mostra dettagli</a>
                    <a class="btn modifing_link" href="{{route('admin.properties.edit', $property)}}" class="card-link">Modifica informazioni</a>
                    
                    <!-- form di eliminazione proprietà -->
                    <form class="" action="{{route("admin.properties.destroy", $property)}}" method="POST">
                        @csrf
                        @method("DELETE")

                        <button type="submit" class="btn modifing_link">Cancella appartamento</button>
                    </form>
                    <!-- /form di eliminazione proprietà -->

                    {{-- Stampa della lista degli appartamenti --}}

                    </div>
                </div>
                </li>
                @endforeach
            </div>
            </ul>
    </div>
<div>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="wraper bootstrap snippets bootdeys bootdey">
    <div class="page-title"> 
        <h3 class="title">Inbox</h3> 
    </div>
      
    <div class="row">
        <!-- Left sidebar -->
        <div class="col-md-3">
            <div class="panel panel-default p-0  m-t-20">
                <div class="panel-body p-0">
                    <div class="list-group no-border mail-list">
                      <a href="#" class="list-group-item active"><i class="fa fa-download m-r-5"></i> Ricevuti <b>(8)</b></a>
                      <a href="#" class="list-group-item"><i class="fa fa-star-o m-r-5"></i> Importanti</a>
                      <a href="#" class="list-group-item"><i class="fa fa-file-text-o m-r-5"></i> Bozze <b>(20)</b></a>
                      <a href="#" class="list-group-item"><i class="fa fa-paper-plane-o m-r-5"></i> Inviati</a>
                      <a href="#" class="list-group-item"><i class="fa fa-trash-o m-r-5"></i> Cestino <b>(354)</b></a>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- End Left sidebar -->
        
        <!-- Right Sidebar -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-lg-12">

            
            <div class="panel panel-default m-t-20">
                <div class="panel-body">
                    <table class="table table-hover mails">
                        <tbody>
                            <tr>
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star"></i>
                                </td>
                                <td>
                                    <a href="##email-read.html">Google Inc</a>
                                </td>
                                <td>
                                    <a href="##email-read.html"><i class="m-r-15"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right">
                                    07:23 AM
                                </td>
                            </tr>

                            <tr>
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star text-warning"></i>
                                </td>
                                <td>
                                    <a href="##email-read.html">John Deo</a>
                                </td>
                                <td>
                                    <a href="##email-read.html"><i class="m-r-15"></i>Hi Bro, How are you?</a>
                                </td>
                                <td>
                                    
                                </td>
                                <td class="text-right">
                                    07:03 AM
                                </td>
                            </tr>

                            <tr class="active">
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Manager</a>
                                </td>
                                <td>
                                    <a href="#email-read.html"><i class="m-r-15"></i>Dolor sit amet, consectetuer adipiscing</a>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right">
                                    03:00 AM
                                </td>
                            </tr>

                            <tr>
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star text-warning"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Manager</a>
                                </td>
                                <td>
                                    <a href="#email-read.html"><i class="m-r-15"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right">
                                    22 Feb
                                </td>
                            </tr>

                            <tr>
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star text-warning"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Facebook</a>
                                </td>
                                <td>
                                    <a href="#email-read.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    
                                </td>
                                <td class="text-right">
                                    22 Feb
                                </td>
                            </tr>

                            <tr class="active">
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star text-warning"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Google Inc</a>
                                </td>
                                <td>
                                    <a href="#email-read.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    
                                </td>
                                <td class="text-right">
                                    21 Feb
                                </td>
                            </tr>

                            <tr class="active">
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Twitter Inc</a>
                                </td>
                                <td>
                                    <a href="#email-read.html"><i class="m-r-15"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right">
                                    21 Feb
                                </td>
                            </tr>

                            <tr class="active">
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Jonaly Smith</a>
                                </td>
                                <td>
                                    <a href="#email-read.html"><i class="m-r-15"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right">
                                    19 Feb
                                </td>
                            </tr>

                            <tr class="active">
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Google Inc</a>
                                </td>
                                <td>
                                    <a href="#email-read.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right">
                                    19 Feb
                                </td>
                            </tr>

                            <tr>
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Google Inc</a>
                                </td>
                                <td>
                                    <a href="#email-read.html"><i class="m-r-15"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right">
                                    19 Feb
                                </td>
                            </tr>

                            <tr>
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star text-warning"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">John Deo</a>
                                </td>
                                <td>
                                    <a href="#email-read.html"><i class="m-r-15"></i>Hi Bro, How are you?</a>
                                </td>
                                <td>
                                    
                                </td>
                                <td class="text-right">
                                    18 Feb
                                </td>
                            </tr>

                            <tr class="active">
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Manager</a>
                                </td>
                                <td>
                                    <a href="#email-read.html"><i class="m-r-15"></i>Dolor sit amet, consectetuer adipiscing</a>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right">
                                    18 Feb
                                </td>
                            </tr>

                            <tr>
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star text-warning"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Manager</a>
                                </td>
                                <td>
                                    <a href="#email-read.html"><i class="m-r-15"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right">
                                    15 Feb
                                </td>
                            </tr>

                            <tr>
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star text-warning"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Facebook</a>
                                </td>
                                <td>
                                    <a href="#email-read.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    
                                </td>
                                <td class="text-right">
                                    15 Feb
                                </td>
                            </tr>

                            <tr class="active">
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star text-warning"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Google Inc</a>
                                </td>
                                <td>
                                    <a href="#email-read.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    
                                </td>
                                <td class="text-right">
                                    14 Feb
                                </td>
                            </tr>

                            <tr class="active">
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Twitter Inc</a>
                                </td>
                                <td>
                                    <a href="#email-read.html"><i class="m-r-15"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right">
                                    12 Feb
                                </td>
                            </tr>

                            <tr class="active">
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Jonaly Smith</a>
                                </td>
                                <td>
                                    <a href="#email-read.html"><i class="m-r-15"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right">
                                    12 Feb
                                </td>
                            </tr>

                            <tr class="active">
                                <td class="mail-select">
                                    <label class="cr-styled">
                                        <input type="checkbox"><i class="fa"></i>
                                    </label>
                                </td>
                                <td class="mail-rateing">
                                    <i class="fa fa-star"></i>
                                </td>
                                <td>
                                    <a href="#email-read.html">Google Inc</a>
                                </td>
                                <td>
                                    <a href="#email-read.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right">
                                    10 Feb
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                    
                    <hr>
                    
                    <div class="row">
                        <div class="col-xs-7">
                            Showing 1 - 20 of 289
                        </div>
                        <div class="col-xs-5">
                            <div class="btn-group pull-right">
                              <button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                              <button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div> <!-- panel body -->
            </div> <!-- panel -->
        </div> <!-- end Col-9 -->
    
    </div><!-- End row -->


</div>
</div>

</div>

@endsection

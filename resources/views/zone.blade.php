@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <h2 class="text-center"> Yellow Zone</h2>
                   <div class="row">
                       <div class="col-md-8 next-fixture">
                           <div class="panel panel-info">
                               <div class="panel-heading">
                                   <h3 class="panel-title">Next Fixture</h3>
                               </div>
                               <div class="panel-body">
                                   <span>Venue: </span> Crook GC <br/>
                                   <span>Post Code:</span> DL14 3PQ<br/>
                                   <span>Website: </span> www.crookgolf.co.uk<br/>
                                   <span>Date: </span>12/12/2016<br/>
                                   <span>Time: </span>10AM<br/>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 weather">
                           <img src="/images/weather.png" class="" />
                       </div>
                   </div>
                   <div class="row">
                       <div class=" col-md-12 fixtures">
                           <h3 class="text-center">Fixtures</h3>
                           <table class="table table-striped table-bordered">
                               <thead>
                               <tr>
                                   <th>Home Club</th>
                                   <th>Date</th>
                                   <th>Time</th>
                                   <th>Player Results</th>
                                   <th>Team Results</th>
                               </tr>
                               </thead>
                               <tbody>
                               <tr>
                                   <th scope="row">Crook</th>
                                   <td>15/4/2016</td>
                                   <td>10:30</td>
                                   <td>results</td>
                                   <td>results</td>
                               </tr>
                               <tr>
                                   <th scope="row">Bishop Auckland</th>
                                   <td>26/4/2016</td>
                                   <td>11:30</td>
                                   <td>results</td>
                                   <td>results</td>
                               </tr>
                               <tr>
                                   <th scope="row">Newcastle</th>
                                   <td>06/062016</td>
                                   <td>10:30</td>
                                   <td></td>
                                   <td></td>
                               </tr>
                               </tbody>
                           </table>
                       </div>
                       <div class="col-md-12 overall">
                           <ul>
                                <li><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>  <a href="/red/Red_Rabbits_Overall_Team_Results postEV8.pdf" target="_blank">Overall Player Results</a></li>
                               <li><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>  <a href="/red/Red_Rabbits_Overall_Team_Results postEV8.pdf" target="_blank">Overall Team Results</a></li>
                           </ul>
                      </div>
                   </div>
                </div>
                <?php echo View::make('partials.footer') ?>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="main-article">
                    <div class="content-main">
                          <img src="https://images.pexels.com/photos/177557/pexels-photo-177557.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img-fluid">
                          <div class="cover-text">
                              <div class="cover-heading">
                                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque officia aperiam quam
                              </div>
                          </div>
                    </div>
                </div>
                
                <div class="article">
                    <img src="https://images.pexels.com/photos/177557/pexels-photo-177557.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img-fluid" >
                    <div class="article-body">
                        <div class="article-header">
                            Lorem Ipsum Dolor Sit Amet
                        </div>
                        <div class="article-text">
                              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste perferendis voluptatem, explicabo architecto voluptates voluptatibus deserunt magni vel magnam earum?
                        </div>
                        <div class="created">
                            <span class="author"> John Doe </span>
                            <span class="time">19 January 2019</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                  <div class="side">
                      <div class="side-heading">
                          Most Popular
                      </div>

                      <div class="side-article">
                          <img src="https://images.pexels.com/photos/177557/pexels-photo-177557.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img-fluid">
                          <div class="side-text">
                              <div class="side-header">
                                  Lorem ipsum dolor sit amet
                              </div>
                              <div class="side-body">
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, 
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>


@endsection
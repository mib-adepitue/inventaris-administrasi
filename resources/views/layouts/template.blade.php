<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  
  

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('gentella/images/logoKDCW.png') }}" type="image/ico" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  
  <script type="text/javascript" src="{{'http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'}}"></script>
  <link href="{{ asset('gentella/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('gentella/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('gentella/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('gentella/css/custom.min.css') }}" rel="stylesheet">
  <link href="{{ asset('gentella/css/sweetalert2.min.css') }}" rel="stylesheet">

</head>
@php
  $role = Auth::user()->jabatan;
@endphp
@switch($role)
    @case('kord_dpo')
        @php $jabatan = 'Koordinator DPO'; @endphp
        @break
    @case('dpo')
        @php $jabatan = 'DPO'; @endphp
        @break
    @case('kord_tim_ahli')
        @php $jabatan = 'Koordinator Tim Ahli'; @endphp
        @break
    @case('tim_ahli')
        @php $jabatan = 'Tim Ahli'; @endphp
        @break
    @case('ketum')
        @php $jabatan = 'Ketua Umum'; @endphp
        @break
    @case('sekum')
        @php $jabatan = 'Sekretaris Umum'; @endphp
        @break
    @case('bendum')
        @php $jabatan = 'Bendahara Umum'; @endphp
        @break
    @case('wk1')
        @php $jabatan = 'Wakil Ketua I'; @endphp
        @break
    @case('wk2')
        @php $jabatan = 'Wakil Ketua II'; @endphp
        @break    
    @case('kord_keorganisasian')
        @php $jabatan = 'Koordinator Keorganisasian'; @endphp
        @break
    @case('staff_keorganisasian')
        @php $jabatan = 'Staff Keorganisasian'; @endphp
        @break
    @case('kord_P&R')
        @php $jabatan = 'Koordinator Public & Relation'; @endphp
        @break
    @case('staff_P&R')
        @php $jabatan = 'Staff Public & Relation'; @endphp
        @break
    @case('kord_tools')
        @php $jabatan = 'Koordinator Tools & Properties'; @endphp
        @break
    @case('staff_tools')
        @php $jabatan = 'Staff Public & Relation'; @endphp
        @break
    @case('kord_keilmuan')
        @php $jabatan = 'Koordinator Keilmuan'; @endphp
        @break
    @case('kord_program')
        @php $jabatan = 'Koordinator Program'; @endphp
        @break
    @case('staff_program')
        @php $jabatan = 'Staff Program'; @endphp
        @break
    @case('kord_jaringan')
        @php $jabatan = 'Koordinator Jaringan'; @endphp
        @break
    @case('staff_jaringan')
        @php $jabatan = 'Staff Jaringan'; @endphp
        @break
    @case('kord_hardware')
        @php $jabatan = 'Koordinator Hardware'; @endphp
        @break
    @case('staff_hardware')
        @php $jabatan = 'Staff Hardware'; @endphp
        @break
    @case('kord_multimedia')
        @php $jabatan = 'Koordinator Multimedia'; @endphp
        @break
    @case('staff_multimedia')
        @php $jabatan = 'Staff Multimedia'; @endphp
        @break
    @case('all_crew')
        @php $jabatan = 'All Crew'; @endphp
        @break
    @default
        $jabatan = 'Ooops';
@endswitch
<body class="nav-md footer_fixed" >
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col menu_fixed">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="" class="site_title"><img src="{{ asset('gentella/images/header-logo.png') }}" alt="KeDai" width="200"></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="storage/{{ Auth::user()->foto }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{ Auth::user()->name }}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
            <div class="menu_section">
              <h3>{{ $jabatan }} !!</h3>
              <ul class="nav side-menu">
                <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home </a></li>
                <h3>Inventaris</h3>
                <li><a href="{{route('data-barang.index')}}"><i class="fa fa-edit"></i> Data Barang </a>
                </li>
                <li><a><i class="fa fa-desktop"></i> Tansaksi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('peminjaman.index')}}">Peminjaman</a></li>
                    <li><a href="{{route('pernahpinjam')}}">Data Barang Yang Pernah Di Pinjam</a></li>
                  </ul>
                </li>
                 <li><a href="{{route('papaninformasi.index')}}"><i class="fa fa-bullhorn"></i> Papan Informasi</a></li>
                 <li><a href="{{route('perpustakaan.index')}}"><i class="fa fa-book "></i>Perpustakaan</a></li>
                <br>
                <h3>Administrasi</h3>
                <li><a href="{{route('persuratan.index')}}"><i class="fa fa-th"></i> Persuratan </a></li>
                <li><a href="{{route('user.index')}}"><i class="fa fa-users"></i> Data Anggota </a></li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                  aria-expanded="false">
                  <img src="storage/{{ Auth::user()->foto }}" alt="">{{ Auth::user()->name }}
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          <i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" role="main">
        @yield('content')
      </div>
      <!-- /page content -->


    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Inventaris - KeDai Computerworks
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
  </div>

</body>
  <script type="text/javascript" src="{{asset('yajra/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('yajra/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('yajra/jquery.validate.js')}}"></script>
  <script type="text/javascript" src="{{asset('yajra/popper.min.js')}}"></script>
  <script src="{{ asset('gentella/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('gentella/js/date.js') }}"></script>
  <script src="{{ asset('gentella/js/custom.min.js') }}"></script>
  <script src="{{ asset('gentella/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('gentella/js/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('gentella/js/sweetalert2.all.min.js') }}"></script>
@yield('js')
 
  
<script type="text/javascript">
   function hapus_data() {
     $(document).on('click', '#del_id', function(){
              Swal.fire({
                title: 'Anda Yakin ?',
                text: "Anda tidak dapat mengembalikan data yang telah di hapus!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Lanjutkan Hapus!',
                timer: 6500
              }).then((result) => {
                  if (result.value) {
                    var me = $(this),
                        url = me.attr('href'),
                        token = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                          url: url,
                          method: "POST",
                          data : {
                            '_method' : 'DELETE',
                            '_token'  : token
                          },
                          success:function(data){
                            berhasil(data.status, data.pesan);
                            $('#table').DataTable().ajax.reload();
                          },
                          error: function(xhr, status, error){
                              var error = xhr.responseJSON; 
                              if ($.isEmptyObject(error) == false) {
                                $.each(error.errors, function(key, value) {
                                  gagal(key, value);
                                });
                              }
                          } 
                        });
                      }
                  });
              });
   }

  function berhasil(status, pesan) {
      Swal.fire({
        type: status,
        title: pesan,
        showConfirmButton: true,
        timer: 25500,
        button: "Ok"
    })
  }

  function gagal(key, pesan) {
      Swal.fire({
        type: 'error',
        title:  key + ' : ' + pesan,
        showConfirmButton: true,
        timer: 25500,
        button: "Ok"
    })
  }

  function wrong_role(pesan) {
      Swal.fire({
        type: 'error',
        title:  pesan,
        showConfirmButton: true,
        timer: 25500,
        button: "Ok"
    })
  }

  </script>
 

  </html>
 
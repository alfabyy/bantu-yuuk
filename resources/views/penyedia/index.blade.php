<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="profile" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="" href="dashboard" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li>

                    <li class="nav-label">Sub Menu</li>
                    <li><a class="" href="penyedia" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Penyedia</span></a>
                    </li>
                    <li><a class="" href="pengguna" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Pengguna</span></a>
                    </li>
                    <li><a class="" href="layanan" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Layanan</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Penyedia</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Penyedia</h4>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Add</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>  
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Kontak</th>
                                                <th>Usia</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penyedia as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->jenis_kelamin }}</td>
                                                <td>{{ $item->kontak }}</td>
                                                <td>{{ $item->usia }}</td>
                                                <td>
                                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewModal{{ $item->id }}">Detail</button>
                                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">Edit</button>
                                                    <form action="{{ route('penyedia.destroy', $item->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nomor</th>  
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Jenis Kelamin</th>
                                                <th>kontak</th>
                                                <th>Usia</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Create -->
        <div class="modal fade" id="basicModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Penyedia</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('penyedia.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <h5 class="card-title">Nama</h5>
                                <input type="text" name="nama" class="form-control input-default" placeholder="Masukkan Nama" required>
                            </div>
                            <div class="form-group">
                                <h5 class="card-title">Alamat</h5>
                                <input type="text" name="alamat" class="form-control input-default" placeholder="Masukkan Alamat" required>
                            </div>
                            <div class="form-group">
                                <h5 class="card-title">Jenis Kelamin</h5>
                                <label class="radio-inline">
                                    <input type="radio" name="jenis_kelamin" value="l" required> Laki-laki
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="jenis_kelamin" value="p" required> Perempuan
                                </label>
                            </div>
                            <div class="form-group">
                                <h5 class="card-title">Usia</h5>
                                <input type="number" name="usia" class="form-control input-default" placeholder="Masukkan Usia" required>
                            </div>
                            <div class="form-group">
                                <h5 class="card-title">Kontak</h5>
                                <input type="number" name="kontak" class="form-control input-default" placeholder="Masukkan Nomor Kontak" required>
                            </div>
                            <div class="form-group">
                                <h5 class="card-title">Deskripsi</h5>
                                <textarea name="deskripsi" class="form-control" rows="4" placeholder="Tambahkan deskripsi (opsional)"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                    
            </div>
        </div>
        </div>

        <!-- Modal Edit Penyedia -->
        @foreach ($penyedia as $item)
        @if ($item) 
        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Penyedia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('penyedia.update', $item->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <h5 class="card-title">Nama</h5>
                                <input type="text" name="nama" class="form-control input-default" value="{{ old('nama', $item->nama) }}" placeholder="Masukkan Nama" required>
                            </div>
                            <div class="form-group">
                                <h5 class="card-title">Alamat</h5>
                                <input type="text" name="alamat" class="form-control input-default" value="{{ old('alamat', $item->alamat) }}" placeholder="Masukkan Alamat" required>
                            </div>
                            <div class="form-group">
                                <h5 class="card-title">Jenis Kelamin</h5>
                                <label class="radio-inline">
                                    <input type="radio" name="jenis_kelamin" value="l" {{ old('jenis_kelamin', $item->jenis_kelamin) == 'l' ? 'checked' : '' }} required> Laki-laki
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="jenis_kelamin" value="p" {{ old('jenis_kelamin', $item->jenis_kelamin) == 'p' ? 'checked' : '' }} required> Perempuan
                                </label>
                            </div>
                            <div class="form-group">
                                <h5 class="card-title">Usia</h5>
                                <input type="number" name="usia" class="form-control input-default" value="{{ old('usia', $item->usia) }}" placeholder="Masukkan Usia" required>
                            </div>
                            <div class="form-group">
                                <h5 class="card-title">Kontak</h5>
                                <input type="number" name="kontak" class="form-control input-default" value="{{ old('kontak', $item->kontak) }}" placeholder="Masukkan Nomor Kontak" required>
                            </div>
                            <div class="form-group">
                                <h5 class="card-title">Deskripsi</h5>
                                <textarea name="deskripsi" class="form-control" rows="4" placeholder="Tambahkan deskripsi (opsional)">{{ old('deskripsi', $item->deskripsi) }}</textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif   
        @endforeach

         <!-- Modal View Penyedia -->
         @foreach ($penyedia as $item)
         @if ($item) 
         <div class="modal fade" id="viewModal{{ $item->id }}" tabindex="-1" aria-labelledby="viewModalLabel{{ $item->id }}" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="viewModalLabel{{ $item->id }}">Detail Penyedia</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <form action="{{ route('penyedia.update', $item->id) }}" method="post">
                             @csrf
                             @method('PUT')
                             <div class="form-group">
                                 <h5 class="card-title">Nama</h5>
                                 <input type="text" name="nama" class="form-control input-default" value="{{ old('nama', $item->nama) }}" placeholder="Masukkan Nama" readonly>
                             </div>
                             <div class="form-group">
                                 <h5 class="card-title">Alamat</h5>
                                 <input type="text" name="alamat" class="form-control input-default" value="{{ old('alamat', $item->alamat) }}" placeholder="Masukkan Alamat" readonly>
                             </div>
                             <div class="form-group">
                                 <h5 class="card-title">Jenis Kelamin</h5>
                                 <label class="radio-inline">
                                     <input type="radio" name="jenis_kelamin" value="l" {{ old('jenis_kelamin', $item->jenis_kelamin) == 'l' ? 'checked' : '' }} readonly> Laki-laki
                                 </label>
                                 <label class="radio-inline">
                                     <input type="radio" name="jenis_kelamin" value="p" {{ old('jenis_kelamin', $item->jenis_kelamin) == 'p' ? 'checked' : '' }} readonly> Perempuan
                                 </label>
                             </div>
                             <div class="form-group">
                                 <h5 class="card-title">Usia</h5>
                                 <input type="number" name="usia" class="form-control input-default" value="{{ old('usia', $item->usia) }}" placeholder="Masukkan Usia" readonly>
                             </div>
                             <div class="form-group">
                                 <h5 class="card-title">Kontak</h5>
                                 <input type="number" name="kontak" class="form-control input-default" value="{{ old('kontak', $item->kontak) }}" placeholder="Masukkan Nomor Kontak" readonly>
                             </div>
                             <div class="form-group">
                                 <h5 class="card-title">Deskripsi</h5>
                                 <textarea name="deskripsi" class="form-control" rows="4" placeholder="Tambahkan deskripsi (opsional)" readonly>{{ old('deskripsi', $item->deskripsi) }}</textarea>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         @endif   
         @endforeach


        
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Alfaby</a> 2024</p>
        </div>

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    


    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>

</body>

</html>
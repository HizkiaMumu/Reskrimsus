@extends('master-dashboard') 
@section('title', 'HTCK') 
@section('style')
    <style>
        .get-oc-tb, .get-up{
            display: none;
        }
    </style>
@endsection 

@section('content-header')

    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Struktur Organisasi dari subdit
            <b>{{ Auth::user()->subdit }}</b>
        </h3>
        <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Subdit {{ Auth::user()->subdit }}</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Struktur Organisasi
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="content-header-right col-md-6 col-12 mb-2 breadcrumb-new" style="text-align: right !important;">
        <button type="button" name="button" class="btn btn-outline-info round" id="tombolTambahStrukturOrganisasi">Tambah Struktur Organisasi</button>
    </div>

@endsection 

@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Struktur Organisasi dari subdit {{ Auth::user()->subdit }}</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <a data-action="collapse">
                                    <i class="ft-minus"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="reload">
                                    <i class="ft-rotate-cw"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="expand">
                                    <i class="ft-maximize"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="close">
                                    <i class="ft-x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <table class="table" id="strukturTable" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jabatan</th>
                                    <th>Nama</th>
                                    <th>Atasan</th>
                                    <th class="text-center" width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($struktur_organisasi as $item)
                                    <tr>
                                        <td>{{ $no_struktur_organisasi++ }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->atasan['nama'] }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-outline-danger" href="/admin/users/hapus-struktur-organisasi/{{ $item->id }}">
                                                <i class="la la-trash"></i>
                                            </a>
                                            <a class="btn btn-outline-primary editStrukturOrganisasi">
                                                <i class="la la-edit"></i>
                                            </a>
                                            <input type="hidden" value="{{ $item->id }}">
                                            </td>                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="strukturOrganisasiChart"></div>

    <!-- MODALS -->
    <div class="iziModal" id="modalStrukturOrganisasi">
        <form class="form" action="" method="POST" id="formStrukturOrganisasi" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan nama..." required>
                </div>
                <div class="form-group">
                    <label for="parent_id">Nama Atasan</label>
                    <select name="parent_id" class="form-control" id="parent_id">
                        <option value="">-</option>
                        @foreach ($struktur_organisasi as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="link_gambar">Avatar</label>
                    <div class="custom-file">
                        <input type="file" name="link_gambar" class="custom-file-input" id="link_gambar">
                        <label class="custom-file-label" for="link_gambar">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukan jabatan...">
                </div>
                <div class="form-group" style="display: none;">
                    <label for="subdit">Subdit</label>
                    <select name="subdit" class="form-control" id="subdit">
                        <option value="ditreskrimsus">DITRESKRIMSUS</option>
                        <option value="indagsi">Subdit I (INDAGSI)</option>
                        <option value="ppukdm">Subdit II (PPUKDM)</option>
                        <option value="tipidkor">Subdit III (TIPIDKOR)</option>
                        <option value="tipidter">Subdit IV (TIPIDTER)</option>
                    </select>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary round btn-min-width btn-block">Submit</button>
                <input type="reset" value="Reset" id="reset" style="display: none;">
            </div>
        </form>
    </div>
    <!-- END MODALS -->

@endsection 

@section('script')

    @if (Auth::user()->subdit == 'tipidkor')
    <script>
        $.ajax({
            method: 'GET',
            url: '/admin/struktur-organisasi/ajax/get-struktur-organisasi-tipidkor'
        }).done(function (data) {
            var orgchart = new getOrgChart(document.getElementById("strukturOrganisasiChart"), {
            theme: "cassandra",
            enableEdit: false,
            enableZoom: false,
            enableMove: false,
            enableSearch: false,
            scale: 0.5,
            color: "neutralgrey",
            idField: "id",
            parentIdField: "parent_id",
            primaryFields: ["jabatan", "nama"],
            photoFields: ["link_gambar"],
            dataSource: data
            });
        });
    </script>
    @elseif (Auth::user()->subdit == 'ditreskrimsus')
    <script>
        $.ajax({
            method: 'GET',
            url: '/admin/struktur-organisasi/ajax/get-struktur-organisasi'
        }).done(function (data) {
            var orgchart = new getOrgChart(document.getElementById("strukturOrganisasiChart"), {
            enableEdit: false,
            enableZoom: false,
            enableMove: false,
            enableSearch: false,
            scale: 0.5,
            color: "neutralgrey",
            idField: "id",
            parentIdField: "parent_id",
            primaryFields: ["jabatan", "nama"],
            photoFields: ["link_gambar"],
            dataSource: data
            });
        });
    </script>
    @endif
    <script>
        $('.iziModal').iziModal({
            fullscreen: true,
            title: 'Form Struktur Organisasi',
            padding: 15,
            zindex: 2000,
            headerColor: "#1E9FF2"
        })
        $(document).on('click', '#tombolTambahStrukturOrganisasi', function () {
            $('#reset').click();
            $('#subdit option[value="{{ Auth::user()->subdit }}"]').attr('selected', true);
            $('#formStrukturOrganisasi').attr('action', '/admin/struktur-organisasi/tambah-struktur-organisasi');
            $('#modalStrukturOrganisasi').iziModal('open');
        });
        $(document).on('click', '.editStrukturOrganisasi', function () {
            var id = $(this).next().val();
            $.ajax({
                method: 'GET',
                url: '/admin/struktur-organisasi/edit-struktur-organisasi/'+ id                
            }).done(function (data) {
                $('#nama').val(data.nama);
                $('#parent_id option[value="'+ data.parent_id +'"]').attr('selected', true);
                $('#jabatan').val(data.jabatan);
                $('#subdit option[value="{{ Auth::user()->subdit }}"]').attr('selected', true);
                $('#modalStrukturOrganisasi').iziModal('open');
            });
            $('#formStrukturOrganisasi').attr('action', '/admin/struktur-organisasi/update-struktur-organisasi/'+ id);
        });
    </script>

    @if(session('OK'))
        <script>
            toastr.success('{{ session("OK") }}', 'Success!');
        </script>
    @elseif(session('ERR'))
        <script>
            toastr.danger('{{ session("ERR") }}', 'Failed!');
        </script>
    @endif
@endsection

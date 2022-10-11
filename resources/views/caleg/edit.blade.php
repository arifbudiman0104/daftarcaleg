@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
            role="alert">
            {{ session('status') }}
        </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm md:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Edit
            </header>

            <div class="w-full p-6">
                <form action="{{ route('caleg.update', $caleg->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- <div class="py-3">

                        <label class="block mb-2 text-sm font-medium text-gray-900 " for="foto">Upload
                            Foto</label>
                        <input
                            class="block p-5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer  focus:outline-none   "
                            id="foto" type="file" name="foto" value="{{$caleg->getFirstMediaUrl('foto', 'thumb')}}">
                    </div> --}}
                    <div class="grid gap-6 mb-6 md:grid-cols-2">

                        <div>
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                                Lengkap</label>
                            <input type="text" id="nama" name="nama" placeholder="Nama Lengkap"
                                value="{{ $caleg->nama }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                                required="">
                        </div>
                        <div>
                            <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 ">NIK</label>
                            <input type="number" id="nik" name="nik" value="{{ $caleg->nik }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                                placeholder="2346234879457" required="">
                        </div>
                        <div>
                            <label for="daerahpemilihan" class="block mb-2 text-sm font-medium text-gray-900 ">Daerah
                                Pemilihan</label>
                            <input type="text" id="daerahpemilihan" name="daerahpemilihan"
                                value="{{ $caleg->daerahpemilihan }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                                placeholder="Provinsi/Kabupaten" required="">
                        </div>

                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor
                                Telepon</label>
                            <input type="tel" id="phone" name="notelepon" value="{{ $caleg->notelepon }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                                placeholder="081392408350" required="">
                        </div>

                        <div>
                            <label for="tempat-lahir" class="block mb-2 text-sm font-medium text-gray-900 ">Tempat
                                Lahir</label>
                            <input type="text" id="tempat-lahir" name="tempatlahir" value="{{ $caleg->tempatlahir }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                                placeholder="Banyumas" required="">
                        </div>
                        <div>
                            <label for="tanggal-lahir" class="block mb-2 text-sm font-medium text-gray-900 ">Tanggal
                                Lahir</label>
                            <input type="date" id="tanggal-lahir" name="tanggallahir" value="{{ $caleg-> tanggallahir }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                                placeholder="flowbite.com" required="">
                        </div>

                        <div>
                            <label for="jenis-kelamin" class="block mb-2 text-sm font-medium text-gray-900 ">Jenis
                                Kelamin</label>
                            <select id="jenis-kelamin" name="jeniskelamin" type="text"
                                value="{{ $caleg->jeniskelamin }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>

                            </select>
                        </div>
                        <div>
                            <label for="agama" class="block mb-2 text-sm font-medium text-gray-900 ">Agama</label>
                            <input type="text" id="agama" name="agama" value="{{ $caleg->agama }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                                placeholder="Islam" required="">
                        </div>
                        <div>
                            <label for="status-perkawinan" class="block mb-2 text-sm font-medium text-gray-900 ">Status
                                Perkawinan</label>
                            <input type="text" id="status-perkawinan" name="statusperkawinan"
                                value="{{ $caleg->statusperkawinan }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                                placeholder="Kawin" required="">
                        </div>

                    </div>
                    <div class="mb-6">
                        <label for="alamat-ktp" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat
                            KTP</label>
                        <input type="text" id="alamat-ktp" name="alamatktp" value="{{ $caleg->alamatktp }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                            placeholder="Kab. Banyumas, Kec. Purwojati, Desa Klapasawit, RT1 RW1" required="">
                    </div>
                    <div class="mb-6">
                        <label for="alamat-domisili" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat
                            Domisili</label>
                        <input type="text" id="alamat-domisili" name="alamatdomisili"
                            value="{{ $caleg->alamatdomisili }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                            placeholder="Kab. Bantul, Kec. Kasihan, Desa Kasihan, RT1 RW1" required="">
                    </div>
                    <div class="mb-6">
                        <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900 ">Pekerjaan</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" value="{{ $caleg->pekerjaan }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                            placeholder="Dosen" required="">
                    </div>
                    <div class="mb-6">
                        <label for="pendidikan-terakhir"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Pendidikan
                            Terakhir</label>
                        <input type="text" id="pendidikan-terakhir" name="pendidikanterakhir"
                            value="{{ $caleg->pendidikanterakhir }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                            placeholder="S1" required="">
                    </div>

                    <div class="mb-6">
                        <label for="sd" class="block mb-2 text-sm font-medium text-gray-900 ">SD</label>
                        <input type="text" id="sd" name="sd" value="{{ $caleg->sd }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                            placeholder="SD N 1 Bantul" required="">
                    </div>
                    <div class="mb-6">
                        <label for="smp" class="block mb-2 text-sm font-medium text-gray-900 ">SMP</label>
                        <input type="text" id="smp" name="smp" value="{{ $caleg->smp }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                            placeholder="SMP N 2 Bantul" required="">
                    </div>
                    <div class="mb-6">
                        <label for="sma" class="block mb-2 text-sm font-medium text-gray-900 ">SMA</label>
                        <input type="text" id="sma" name="sma" value="{{ $caleg->sma }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                            placeholder="SMA N 1 Bantul" required="">
                    </div>
                    <div class="mb-6">
                        <label for="s1" class="block mb-2 text-sm font-medium text-gray-900 ">S1</label>
                        <input type="text" id="s1" name="s1" value="{{ $caleg->s1 }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                            placeholder="Univarsitas Muhammadiyah Purwokerto" required="">
                    </div>
                    <div class="mb-6">
                        <label for="s2" class="block mb-2 text-sm font-medium text-gray-900 ">S2</label>
                        <input type="text" id="s2" name="s2" value="{{ $caleg->s2 }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                            placeholder="Univarsitas Muhammadiyah Purwokerto" required="">
                    </div>
                    <div class="mb-6">
                        <label for="s3" class="block mb-2 text-sm font-medium text-gray-900 ">S3</label>
                        <input type="text" id="s3" name="s3" value="{{ $caleg->s3 }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5    -500 -500"
                            placeholder="Univarsitas Muhammadiyah Purwokerto" required="">
                    </div>

                    <label for="riwayat-diklat" class="block mb-2 text-sm font-medium text-gray-900 ">Riwayat
                        Diklat</label>
                    <textarea id="riwayat-diklat" rows="4" name="riwayatdiklat" value="{{ $caleg->riwayatdiklat }}"
                        class="block p-2.5 w-full text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500    -500 -500"
                        placeholder="Riwayat Diklat 1. ">{{ $caleg->riwayatdiklat }}</textarea>

                    <label for="riwayat-organisasi" class="block mb-2 text-sm font-medium text-gray-900 ">Riwayat
                        Organisasi</label>
                    <textarea id="riwayat-organisasi" rows="4" name="riwayatorganisasi"
                        value="{{ $caleg->riwayatorganisasi }}"
                        class="block p-2.5 w-full text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500    -500 -500"
                        placeholder="Riwayat Organisasi 1. ">{{ $caleg->riwayatorganisasi }}</textarea>

                    <label for="riwayat-pekerjaan" class="block mb-2 text-sm font-medium text-gray-900 ">Riwayat
                        Pekerjaan</label>
                    <textarea id="riwayat-pekerjaan" rows="4" name="riwayatpekerjaan"
                        value="{{ $caleg->riwayatpekerjaan }}"
                        class="block p-2.5 w-full text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500    -500 -500"
                        placeholder="Riwayat Pekerjaan 1. ">{{ $caleg->riwayatpekerjaan }}</textarea>

                    <label for="riwayat-Penghargaan" class="block mb-2 text-sm font-medium text-gray-900 ">Riwayat
                        Penghargaan</label>
                    <textarea id="riwayat-Penghargaan" rows="4" name="riwayatpenghargaan"
                        value="{{ $caleg->riwayatpenghargaan }}"
                        class="block p-2.5 w-full text-sm mb-5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500    -500 -500"
                        placeholder="Riwayat Penghargaan 1. ">{{ $caleg->riwayatpenghargaan }}</textarea>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center  -700 -800">Submit</button>
                </form>
            </div>
        </section>
    </div>
</main>
@endsection

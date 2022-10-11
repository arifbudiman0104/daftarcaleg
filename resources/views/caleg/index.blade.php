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

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Daftar Hasil Pendaftaran Caleg
            </header>

            <div class="w-full p-6">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <a href="/caleg/create">Create</a></button>
                <button type="button"
                    class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 "><a
                        href="/caleg/export/">Eksport Excel</a></button>

                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full   text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    ID
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Foto
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Nama
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    NIK
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Daerah Pemilihan
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Nomor Telp.
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Tempat Lahir
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Tanggal Lahir
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Jenis Kelamin
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Agama
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Status Perkawinan
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Alamat KTP
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Alamat Domisili
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Pekerjaan
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Pendidikan Terakhir
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    SD
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    SMP
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    SMA
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    S1
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    S2
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    S3
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Riwayat Diklat
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Riwayat Organisasi
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Riwayat Pekerjaan
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Riwayat Penghargaan
                                </th>
                                <th scope="col" class="py-3 px-6 text-right ">
                                    <span class="sr-only">Action</span>
                                </th>

                            </tr>
                        </thead>


                        <tbody>
                            {{-- {{ dd($caleg) }} --}}

                            @foreach ($caleg as $data)
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->id }}
                                </td>
                                <td><img src="{{$data->getFirstMediaUrl('foto', 'thumb')}}" / width="220px"></td>
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $data->nama }}
                                </th>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->nik }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->daerahpemilihan }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->notelepon }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->tempatlahir }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->tanggallahir }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->jeniskelamin}}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->agama }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->statusperkawinan }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->alamatktp }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->alamatdomisili }}
                                </td>

                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->pekerjaan }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->pendidikanterakhir }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->sd }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->smp }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->sma }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->s1 }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->s2 }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->s3 }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->riwayatdiklat }}

                                </td>
                                <td class="py-4 px-6 max-w-10 text-gray-900 whitespace-nowrap ">
                                    {{ $data->riwayatorganisasi }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->riwayatpekerjaan }}
                                </td>
                                <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                                    {{ $data->riwayatpenghargaan }}
                                </td>
                                <td class="py-4 px-auto text-right gap-10 flex">
                                    <a
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  focus:outline-none "
                                        href="{{ route('caleg.edit',$data->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('caleg.destroy', [$data->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        {{ method_field('DELETE') }}
                                        <button type="submit"
                                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  focus:outline-none">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>






            </div>
        </section>
    </div>
</main>
@endsection

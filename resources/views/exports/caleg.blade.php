<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Daerah Pemilihan</th>
            <th>NIK</th>
            <th>No Telepon</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat KTP</th>
            <th>Alamat Domisili</th>
            <th>Status Perkawinan</th>
            <th>Pendidikan Terakhir</th>
            <th>Pekerjaan</th>
            <th>SD</th>
            <th>SMP</th>
            <th>SMA</th>
            <th>S1</th>
            <th>S2</th>
            <th>S3</th>
            <th>Riwayat Diklat</th>
            <th>Riwayat Organisasi</th>
            <th>Riwayat Pekerjaan</th>
            <th>Riwayat Penghargaan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($caleg as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->getFirstMediaUrl('foto', 'thumb') }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->daerahpemilihan }}</td>
            <td>{{ $data->nik }}</td>
            <td>{{ $data->notelepon }}</td>
            <td>{{ $data->tempatlahir }}</td>
            <td>{{ $data->tanggallahir }}</td>
            <td>{{ $data->jeniskelamin }}</td>
            <td>{{ $data->agama }}</td>
            <td>{{ $data->alamatktp }}</td>
            <td>{{ $data->alamatdomisili }}</td>
            <td>{{ $data->statusperkawinan }}</td>
            <td>{{ $data->pendidikanterakhir }}</td>
            <td>{{ $data->pekerjaan }}</td>
            <td>{{ $data->sd }}</td>
            <td>{{ $data->smp }}</td>
            <td>{{ $data->sma }}</td>
            <td>{{ $data->s1 }}</td>
            <td>{{ $data->s2 }}</td>
            <td>{{ $data->s3 }}</td>
            <td>{{ $data->riwayatdiklat }}</td>
            <td>{{ $data->riwayatorganisasi }}</td>
            <td>{{ $data->riwayatpekerjaan }}</td>
            <td>{{ $data->riwayatpenghargaan }}</td>

        </tr>
        @endforeach
    </tbody>
</table>

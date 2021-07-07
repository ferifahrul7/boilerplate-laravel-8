<table class="table table-hover table-responsive-sm table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>#</th>
            <th>Thumbnail</th>
            <th>Judul</th>
            <th>Teks</th>
            <th class="text-right">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sliders as $slider)
        <tr>
            <td>{{ $loop->iteration + $sliders->firstItem() - 1 }}</td>
            <td><img src="{{ $slider->thumb_slider }}" alt="{{ $slider->judul }}" class="img-fluid" style="max-width:100px"></td>
            <td>
                <h3>{!! $slider->judul !!}</h3>
            </td>
            <td>
                <p>{{ $slider->teks }}</p>
            </td>
            <td class="text-right">
                <button type="button" class="btn btn-sm btn-info" @click='showImage(@json($slider->thumb_slider))'>Show</button>
                <a href="{{ route('sliders.edit',$slider->id) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                <button @click='hapus(@json(route("sliders.destroy",$slider->id)))' class="btn btn-outline-danger btn-sm">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
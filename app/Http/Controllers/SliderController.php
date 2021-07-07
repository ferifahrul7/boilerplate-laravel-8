<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BackendController as Controller;
// use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->limit = 25;
        // parent::__construct();

        // $this->middleware('permission:read-slider');
        // $this->middleware('permission:create-slider', ['only' => ['create', 'store']]);
        // $this->middleware('permission:edit-slider', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:delete-slider', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $bcrum = $this->bcrum('Sliders');
        $sliders = Slider::where(function ($query) use ($request) {
            if ($term = $request->get('term')) {
                $keywords = '%' . $term . '%';
                $query->where('teks', 'like', $keywords);
            }
        })->latest()->paginate($this->limit);

        return view('dashboard.sliders.index', compact('bcrum','sliders'));
    }

    public function create()
    {
        $bcrum = $this->bcrum('Create', route('sliders.index'), 'Slider');

        return view('dashboard.sliders.create', compact('bcrum'));
    }

    public function store(Request $request)
    {
        try {
            $data = $this->handleRequest($request);
            $newSlider = Slider::create($data);
            if ($newSlider) {
                return response()->success(200, 'Berhasil Menambahkan Gambar', $this->mapper($newSlider));
            } else {
                $this->deleteImage($data['slider']);
            }
        } catch (Exception $e) {

            return response()->error(500, 'Gagal Menambahkan gambar', [$e->getMessage()]);
        }
    }

    public function show()
    {
        //menampilkan slider 
    }

    public function edit($id)
    {
        $bcrum  = $this->bcrum('Edit', route('sliders.index'), 'Slider');
        $slider = Slider::find($id);

        return view('dashboard.sliders.edit', compact('bcrum', 'slider'));
    }

    public function update(Request $request, $id)
    {
        try {
            $data         = $this->handleRequest($request);
            $slider       = Slider::find($id);
            $oldSlider    = $slider->slider;
            $slider->update($data);
            if ($oldSlider !== $slider->slider) {
                $this->deleteImage($oldSlider);
            }
            return response()->success(200, 'Berhasil Mengedit Gambar', $this->mapper($slider));
        } catch (Exception $e) {
            return response()->error(500, 'Gagal Mengedit gambar', [$e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $slider = Slider::find($id);
            if ($slider->delete()) {
                $this->deleteImage($slider->slider);

                return response()->success(200, 'Berhasil Menghapus Gambar', $this->mapper($slider));
            }
        } catch (Exception $e) {

            return response()->error(500, 'Gagal Mengedit gambar', [$e->getMessage()]);
        }
    }

    public function handleRequest($request)
    {
        $data = $request->all();
        if ($request->has('slider')) {
            $destination = public_path() . '/storage/img/slider';
            if (!File::isDirectory($destination)) File::makeDirectory($destination, 0775, true, true);
            $image       = $request->file('slider');
            $extension   = $image->guessClientExtension();
            $fileName    = 'image_' . Str::slug($request->name_image, '_') . '_' . date('dmy_His') . '.' . $extension;
            // $thumbName   = "thumb_" . $fileName;

            Image::make($image->getRealPath())
                ->save($destination . "/" . $fileName);

            $data['slider']       = $fileName;
        }
        return $data;
    }

    public function mapper($model)
    {
        return [
            'judul' => $model->judul,
            'teks' => $model->teks,
            // 'slider' => $model->slider,
        ];
    }

    public function deleteImage($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'storage/img/slider' . DIRECTORY_SEPARATOR . $filename;
        return File::delete($path);
    }
}
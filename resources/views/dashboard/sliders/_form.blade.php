<form @submit.prevent="onFileUpload">
    <div class="form-group row">
        <div class="col-lg-12">
            <label for="judul">Judul <small class="text-muted">optional</small></label>
            <input type="text" v-model="fields.judul" class="form-control" placeholder="Judul Slider" autocomplete="off">
            <div v-cloak v-if="errors && errors.judul" class="text-danger">@{{ errors.judul[0] }}</div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-12">
            <label for="teks">Teks <small class="text-muted">optional</small></label>
            <textarea v-model="fields.teks" class="form-control" placeholder="Teks Slider"></textarea>
            <div v-cloak v-if="errors && errors.teks" class="text-danger">@{{ errors.teks[0] }}</div>
        </div>
    </div>

    <div class="form-group row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
            <img v-cloak v-if="changed" :src="previewUrl" alt="" class="img-fluid  mt-4" style="max-width:200px;max-height:200px">
            <p v-cloak v-if="changed" alt="" class="font-weight-bold my-4"> @{{ previewName }}</p>
        </div>
        <div class="col-lg-12">
            <div class="text-center">
                <label v-if="blank" for="path">Gambar</label>
            </div>
            <div class="text-center">
                <input ref="inputFile" style="display: none;" class="form-control" type="file" accept="image/*" @change="onFileSelected">
                <div v-cloak v-if="blank" role="button" @click="$refs.inputFile.click()" class="col-lg-12 bg-light d-block py-3" style="border-style:dashed;">
                    <label>Pilih Gambar</label>
                </div>
                <button v-cloak v-if="changed" class="btn btn-danger" @click="onFileClear">Reset Gambar</button> <br>
                <div v-cloak v-if="errors && errors.slider" class="text-danger">@{{ errors.slider[0] }}</div>

            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-12 d-flex justify-content-end">
            <div v-cloak v-if="uploading">@{{ uploadProgress }}</div>
        </div>
    </div>
</form>
@push('css')
<link rel="stylesheet" href="{{ asset('lib/datetime-vue/vue-datetime.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('lib/datetime-vue/luxon.min.js') }}"></script>
<script src="{{ asset('lib/datetime-vue/main.js') }}"></script>
<script src="{{ asset('lib/datetime-vue/vue-datetime.min.js') }}"></script>
<script>
    const app = new Vue({
        el: "#app",
        data() {
            return {
                previewUrl: @json(isset($slider) ? $slider->thumb_slider : null),
                previewName: @json(isset($slider) ? $slider->slider : null),
                uploadProgress: null,
                blank: @json(isset($slider) ? false : true),
                changed: @json(isset($slider) ? true : false),
                uploading: false,
                //upload destination
                route: {
                    _method: "POST",
                    url: @json(route('sliders.store')),
                },
                //field
                fields: {
                    teks: @json(isset($slider) ? $slider->teks : ""),
                    judul: @json(isset($slider) ? $slider->judul : ""),
                    started_at: @json(isset($slider) ? $slider->started_at_8601 : ""),
                    expired_at: @json(isset($slider) ? $slider->expired_at_8601 : ""),
                    selectedImage: null,
                },
                //error
                errors: null,
            }
        },
        methods: {
            onFileSelected(event) {
                this.fields.selectedImage = event.target.files[0];
                this.previewUrl = URL.createObjectURL(this.fields.selectedImage);
                this.previewName = event.target.files[0].name;
                this.changed = true;
                this.uploading = false;
                this.blank = false;
            },
            onFileClear() {
                this.fields.selectedImage = null;
                this.previewUrl = null;
                this.blank = true;
                this.changed = false;
                this.$refs.inputFile.value = '';
            },
            onResetForm() {
                for (var key in this.fields) {
                    this.fields[key] = null;
                }
                this.previewUrl = null;
                this.blank = true;
                this.changed = false;
                this.$refs.inputFile.value = '';
            },
            onFileUpload: function() {
                if (this.uploading === false) {
                    const fd = new FormData;
                    if (this.fields.selectedImage !== null) {
                        fd.append('slider', this.fields.selectedImage);
                    }
                    fd.append('judul', this.fields.judul);
                    fd.append('teks', this.fields.teks);
                    fd.append('started_at', this.fields.started_at);
                    fd.append('expired_at', this.fields.expired_at);
                    fd.append('_method', this.route._method);

                    axios.post(this.route.url, fd, {
                        onUploadProgress: uploadEvent => {
                            this.uploading = true;
                            this.uploadProgress = 'Proses Upload : ' + uploadEvent.loaded + ' / ' + uploadEvent.total;
                        }
                    }).then((response) => {
                        
                        if (response.data.code === 500) {
                            app.uploading = false;
                            window.Swal.fire(
                                'Gagal!',
                                response.data.message,
                                'error'
                            );

                        } else if (response.data.code === 200) {
                            
                            window.Swal.fire({
                                title: 'Berhasil!!',
                                text: response.data.message,
                                icon: 'success',
                                timer: 1000,
                                timerProgressBar: true,
                                showConfirmButton: false,
                            }).then(() => {
                                window.location.replace(@json(route('sliders.index')));
                            });

                        }

                    }).catch((error) => {

                        app.uploading = false;
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                        }
                    })
                }
            }
        }
    });
</script>
@endpush
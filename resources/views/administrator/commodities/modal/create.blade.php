<!-- Modal -->
<div class="modal fade" id="addCommodityModal" aria-labelledby="addCommodityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCommodityModalLabel">Input Aset</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.aset.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="unique_commodity_number">No Aset</label>
                                <input type="text"
                                    class="form-control{{ $errors->has('unique_commodity_number') ? ' is-invalid' : '' }}"
                                    name="unique_commodity_number" id="unique_commodity_number"
                                    value="{{ old('unique_commodity_number') }}" placeholder="Masukkan id aset.."
                                    required>

                                @if($errors->has('unique_commodity_number'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('unique_commodity_number') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">Nama Aset</label>
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid': '' }}"
                                    name="name" id="name" value="{{ old('name') }}" placeholder="Masukkan nama.."
                                    required>

                                @if($errors->has('name'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="amount">Jumlah</label>
                                <input type="number"
                                    class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" name="amount"
                                    id="amount" value="{{ old('amount') }}" placeholder="Masukkan jumlah.." required>

                                @if($errors->has('amount'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('amount') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="commodity_category_id">Kategori Aset</label>
                                <select
                                    class="form-control{{ $errors->has('commodity_category_id') ? ' is-invalid' : '' }}"
                                    name="commodity_category_id" id="commodity_category_id" required>
                                    <option selected>Pilih..</option>
                                    @foreach($commodity_categories as $key => $commodity_category)
                                    <option value="{{ $commodity_category->id }}">{{ $commodity_category->name }}
                                    </option>
                                    @endforeach
                                </select>

                                @if($errors->has('commodity_category_id'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('commodity_category_id') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="price">Harga Aset</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="number"
                                        class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                        name="price" id="price" placeholder="Masukkan harga.."
                                        required>
                                    @if($errors->has('price'))
                                    <div class="invalid-feedback font-weight-bold d-block">
                                        {{ $errors->first('price') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="condition">Kondisi</label>
                                <select class="form-control{{ $errors->has('condition') ? ' is-invalid' : '' }}"
                                    name="condition" id="condition" required>
                                    <option selected>Pilih..</option>
                                    <option value="Layak">Layak</option>
                                    <option value="Layak Sebagian">Layak Sebagian</option>
                                    <option value="Tidak Layak">Tidak Layak</option>
                                </select>

                                @if($errors->has('condition'))
                                <div class="invalid-feedback font-weight-bold d-block">
                                    {{ $errors->first('condition') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="register_date">Tanggal Masuk</label>
                                <div class="input-group">
                                    <input type="date"
                                        class="form-control{{ $errors->has('register_date') ? ' is-invalid' : '' }}"
                                        name="register_date" id="register_date" placeholder="Pilih tanggal.." data-input
                                        required>
                                    <div class=" input-group-prepend">
                                        <span class="input-group-text">
                                            <a class="input-button" title="Pilih tanggal.." data-toggle>
                                                <i class="fas fa-calendar-alt"></i>
                                            </a>
                                        </span>
                                    </div>

                                    @if($errors->has('register_date'))
                                    <div class="invalid-feedback font-weight-bold d-block">
                                        {{ $errors->first('register_date') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="user_id">Pengguna</label>
                                <input type="hidden" name="user_id" value="1">
                                <input type="text" class="form-control" value="Admin" readonly>
                            </div>
                        </div>
                        
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>

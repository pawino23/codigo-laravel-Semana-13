@csrf

<div class="form-group">
    <div class="custom-file">
        <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="customFile">
        <label class="custom-file-label" for="customFile">Seleccionar archivo</label>
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $servicio->titulo) }}" class="form-control @error('titulo') is-invalid @enderror">
    @error('titulo')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion', $servicio->descripcion) }}" class="form-control @error('descripcion') is-invalid @enderror">
    @error('descripcion')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group text-center">
    <button type="submit" class="btn btn-primary">{{ $btnText }}</button>
</div>
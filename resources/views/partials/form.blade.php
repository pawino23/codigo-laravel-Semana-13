@csrf
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
    <td colspan="2"><button type="submit" class="btn btn-primary">{{ $btnText }}</button></td>
</div>
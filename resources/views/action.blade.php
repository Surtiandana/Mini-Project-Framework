<div class="d-flex">
    <a href="{{ route('barang.show', ['barang' => $barang->id]) }}" class="btn btn-outline-danger btn-sm me-2"><i class="bi bi-file-earmark-text"></i></a>
    <a href="{{ route('barang.edit', ['barang' => $barang->id]) }}" class="btn btn-outline-danger btn-sm me-2"><i class="bi bi-pencil"></i></a>
    <div>
        <form action="{{ route('barang.destroy', ['barang' => $barang->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger btn-sm me-2" onclick="return confirm('Halo Min, yakin mau dihapus? :) ');">
                <i class="bi bi-trash text-alert" style="transition: transform 0.2s ease;"></i>
            </button>
        </form>
    </div>
</div>

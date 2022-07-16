<div class="cart">
    {{-- <a href="{{ route('cart') }}" class="orderCart">Your Cart</a> --}}
    <button wire:click='hohoh'>haaaa</button>
    <p>{{ $data }}</p>
    <p>{{ $babbb }}</p>
    <input type="text" value="{{ $babbb }}">
    <input type="number" name="id" id="id" wire:click='submit'>
    {{-- <livewire:add-to-cart :id='$id'> --}}
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $row)
            <tr>
                <td>
                    <a wire:click.prevevent='submit({{ $row->id }})' href="#">{{ $row->id }}</a>    
                </td>               
                <td>{{ $row->name }}</td> 
                <td>{{ $row->email }}</td>                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

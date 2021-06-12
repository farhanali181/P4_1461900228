<table class="table">
  <thead>
  <tr class="table-active">
                    <td>Id</td>
                    <td>Judul</td>
                    <td>Tahun Terbit</td>

              </tr>

                @foreach ( $data as $no1 )
                    
                
                <tr>
                    <td>{{$no1->id}}</td>
                    <td>{{$no1->judul}}</td>
                    <td>{{$no1->tahun_terbit}}</td>
                   
                </tr>
                @endforeach
  </tbody>
</table>
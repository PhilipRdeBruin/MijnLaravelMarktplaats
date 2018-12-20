    
    <form id="ad_invoerform" role="form" method="post" action="{{action('AdvertentieController@invoeren')}}">
        @csrf
        <h4 id="advertentie"><u>advertentie</u></h4>
        <table>
            <tr><td width="250">Advertentie: <super>*</super></td>
                <td colspan="2"><input required type="text" id="ad_naam" name="ad_naam" value= ''></td></tr>
            <tr><td>Categorie: <super>*</super></td>
            <td colspan="2">
                <select name="rubriek" id="rubriek">
                    <option value="leeg"></option>
                    @foreach($rubrieken as $value)
                        <option value="{{ $value->rubr_id }}">{{ $value->rubr_naam }}</option>
                    @endforeach
                </select>
            </td></tr>
            <tr><td>Prijs: <super>*</super></td>
                <td><input required type="text" id="art_prijs" name="art_prijs" value= '' placeholder="$    0.00"></td>
            <td>Prijs vanaf:&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="prijs_vanaf" name="prijs_vanaf" value="on">
                <input type="checkbox" id="prijs_vanaf2" name="prijs_vanaf2" value="on">
            </td><td id="chkinfo" class="px12"></td></tr>

            <tr><td colspan="2" id="ad_omschrijving"><u><i>Omschrijving:</i></u></td></tr>
            <input type="hidden" name="advertentie_id" value="advertentie_id">
            <tr><td colspan="3"><textarea id="advertentie" name="advertentie" rows="8" cols="80"></textarea><br/><br/></td></tr>
            <tr><td></td><td></td>
            <td><input type="submit" id="advertentieknop" name="advertentieknop" value="plaats advertentie"></td></tr>
            <input type="hidden" id="advertentie_inp_hidden" value="plaats advertentie">
        </table>
    </form>
    <br/>
    <form action="plaatsen.php" method="post" enctype="multipart/form-data">
        <span  class="px14">Kies foto's om te uploaden:</span>
        <input type="file" name="file_to_upload" class="px14, blank" id="file_to_upload">
        <input type="submit" id="upload_submit" name="upload_submit" value="Upload Image">
    </form>
    <div id="fotos">foto's</div>
    <br/>
    <p class="px12, dgrey"><super>*</super>  <i>verplicht veld</i></p>

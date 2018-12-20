
    <?php $rg = 0; ?>

    <div class="overzichtheader">
        <table id="overzichtstabelheader">
            <tr>
                <th width="12.5%">Categorie</th><th width="5%"></th>
                <th width="13.5%">Verkoper</th><th width="5%"></th>
                <th width="26%">Advertentie</th><th width="5%"></th>
                <th width="5%">Prijs</th><th width="5%"></th>
                <th width="20%">Geplaatst</th><th width="5%"></th>
            </tr>
        </table>
    </div>

    <div class="overzicht">
        <table id="overzichtstabel">
            @foreach($advertenties as $key => $value)
                <?php $rg = ($rg == 1) ? 2 : 1; ?>
                <?php 
                    $voornaam = $value->gebruiker->voornaam;
                    $ini = "";
//                    $ini = ($value->gebruiker->intialen != "") ? " " . $value->gebruiker->intialen : "";
                    $tv = ($value->gebruiker->tussenv != "") ? " " . $value->gebruiker->tussenv : "";
                    $achternaam = " " . $value->gebruiker->achternaam;
                    $naam = $voornaam . $ini . $tv . $achternaam;
                ?>
                <tr class="regel{{ $rg }}" >
                    <td width="17.5%">{{ $value->rubriek->rubr_naam }}</td>
                    <td width="17.5%">{{ $naam }}</td>
                    <td width="30%">{{ $value->ad_naam }}</td>
                    <td class="align_rechts" width="10%">{{ $value->art_prijs }}</td>
                    <td class="align_rechts" width="22.5%">{{ $value->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="advertenties">
        @foreach($advertenties as $key => $value)
            <?php 
                $voornaam = $value->gebruiker->voornaam;
                $ini = "";
//                $ini = ($value->gebruiker->intialen != "") ? " " . $value->gebruiker->intialen : "";
                $tv = ($value->gebruiker->tussenv != "") ? " " . $value->gebruiker->tussenv : "";
                $achternaam = " " . $value->gebruiker->achternaam;
                $naam = $voornaam . $ini . $tv . $achternaam;
            ?>
            <table id="advertentieplustabel">
                <tr><td id="tbplusk1">
                    <table id="advertentietabel">
                        <tr id="btblrij1">
                            <td class="btblcel1" id="auteurnaam" width="30%">
                                {{ $naam }}
                            </td>
                            <td class="btblrij1" width="70%">
                                {{ $value->ad_naam }}
                            </td>
                        </tr>
                        <tr>
                            <td id="btblcelx">
                                <i>rubriek: </i>{{ $value->rubriek->rubr_naam }}
                            </td>
                            <td id="btblcelb">
                                {{ $value->ad_tekst }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px12" id="btblrijz">
                                postcode: postcode
                            </td>
                            <td id="btblrijz">
                                <i>geplaatst: {{ $value->created_at }}</i>
                            </td>
                        </tr>
                    </table>

                    <div class="fotogalerij" id="fotogalerij">
                        <img src="foto.jpg" alt="foto">
                    </div></td>

                    <td id="tbplusk2"><table id="biedingentabel">
                        <tr id="btblrij1">
                            <td>prijs: {{ ($value->prijs_vanaf == 1) ? "vanaf" : "" }}</td>
                            <td>{{ $value->art_prijs }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" id="btblrijy">Biedingen:</td>
                        </tr>
                            <!-- -->
                        <tr>
                            <td>

                                bedrag:&nbsp;&nbsp;&nbsp;
                                <input type="text" class = "biedingen" id="bieding" placeholder="$ 0,00"></td><td>
                                <button id="biedknop" onclick="bieden(id)">bieden</button>

                            </td>
                        </tr>
                    </table>
                </td></tr>
            </table>
            <br/><hr class="hr75grijs"/>
        @endforeach
    </div>

<?php
/**
 * Created by David Moreno Falero.
 *
 * Class for Lendismart Rest Api
 *
 * User: dmoreno@housell.com
 * Date: 17/01/19
 * Time: 20:16
 */

namespace dmorenof\lendismart\Dictionaries;

use dmorenof\lendismart\Dictionary;

class Countries extends Dictionary
{
    protected $values = [
        1 => 'Afganistán',
        2 => 'Albania',
        3 => 'Alemania',
        4 => 'Andorra',
        5 => 'Angola',
        6 => 'Anguilla',
        7 => 'Antártida',
        8 => 'Antigua y Barbuda',
        9 => 'Arabia Saudita',
        10 => 'Argelia',
        11 => 'Argentina',
        12 => 'Armenia',
        13 => 'Aruba',
        14 => 'Australia',
        15 => 'Austria',
        16 => 'Azerbaiyán',
        17 => 'Bahamas',
        18 => 'Bahrein',
        19 => 'Bangladesh',
        20 => 'Barbados',
        21 => 'Bélgica',
        22 => 'Belice',
        23 => 'Benin',
        24 => 'Bermudas',
        25 => 'Bhután',
        26 => 'Bielorrusia',
        27 => 'Bolivia',
        28 => 'Bosnia Herzegovina',
        29 => 'Botswana',
        30 => 'Isla Bouvet',
        31 => 'Brasil',
        32 => 'Brunei',
        33 => 'Bulgaria',
        34 => 'Burkina-Faso',
        35 => 'Burundi',
        36 => 'Cabo Verde',
        37 => 'Camboya',
        38 => 'Camerún',
        39 => 'Canadá',
        40 => 'Chad',
        41 => 'Chile',
        42 => 'China',
        43 => 'Chipre',
        44 => 'Ciudad del Vaticano',
        45 => 'Colombia',
        46 => 'Comores',
        47 => 'Congo',
        48 => 'Republica Democratica Congo',
        49 => 'Corea del Norte',
        50 => 'Corea del Sur',
        51 => 'Costa De Marfil',
        52 => 'Costa Rica',
        53 => 'Croacia',
        54 => 'Cuba',
        55 => 'Dinamarca',
        56 => 'Djibouti',
        57 => 'Dominica',
        58 => 'Ecuador',
        59 => 'Egipto',
        60 => 'El Salvador',
        61 => 'Emiratos Árabes Unidos',
        62 => 'Eritrea',
        63 => 'Eslovaquia',
        64 => 'Eslovenia',
        65 => 'España',
        66 => 'Estados Unidos',
        67 => 'Estonia',
        68 => 'Etiopía',
        69 => 'Fidji',
        70 => 'Filipinas',
        71 => 'Finlandia',
        72 => 'Francia',
        73 => 'Gabón',
        74 => 'Gambia',
        75 => 'Georgia',
        76 => 'Ghana',
        77 => 'Gibraltar',
        78 => 'Granada',
        79 => 'Grecia',
        80 => 'Groenlandia',
        81 => 'Guam',
        82 => 'Guatemala',
        83 => 'Guernesey',
        84 => 'Guinea',
        85 => 'Guinea Ecuatorial',
        86 => 'Guinea-Bissau',
        87 => 'Guyana',
        88 => 'Haití',
        89 => 'Honduras',
        90 => 'Hong Kong',
        91 => 'Hungría',
        92 => 'India',
        93 => 'Indonesia',
        94 => 'Irán',
        95 => 'Iraq',
        96 => 'Irlanda',
        97 => 'Isla De Man',
        98 => 'Islandia',
        99 => 'Islas Caimán',
        100 => 'Islas Cook',
        101 => 'Islas Feroe',
        102 => 'Islas Malvinas',
        103 => 'Islas Marianas del Norte',
        104 => 'Islas Menores de EEUU',
        105 => 'Islas Vírgenes Americanas',
        106 => 'Islas Vírgenes Británicas',
        107 => 'Israel',
        108 => 'Italia',
        109 => 'Jamaica',
        110 => 'Japón',
        111 => 'Jersey',
        112 => 'Jordania',
        113 => 'Kazajstán',
        114 => 'Kenia',
        115 => 'Kirguistán',
        116 => 'Kiribati',
        117 => 'Kuwait',
        118 => 'Laos',
        119 => 'Lesotho',
        120 => 'Letonia',
        121 => 'Líbano',
        122 => 'Liberia',
        123 => 'Libia',
        124 => 'Liechtenstein',
        125 => 'Lituania',
        126 => 'Luxemburgo',
        127 => 'Macao',
        128 => 'Macedonia',
        129 => 'Madagascar',
        130 => 'Malasia',
        131 => 'Malawi',
        132 => 'Maldivas',
        133 => 'Mali',
        134 => 'Malta',
        135 => 'Marruecos',
        136 => 'Islas Marshall',
        137 => 'Mauricio',
        138 => 'Mauritania',
        139 => 'Méjico',
        140 => 'Micronesia',
        141 => 'Moldavia',
        142 => 'Mónaco',
        143 => 'Mongolia',
        144 => 'Montenegro',
        145 => 'Montserrat',
        146 => 'Mozambique',
        147 => 'Myanmar',
        148 => 'Namibia',
        149 => 'Nauru',
        150 => 'Nepal',
        151 => 'Nicaragua',
        152 => 'Níger',
        153 => 'Nigeria',
        154 => 'Niue',
        155 => 'Isla Norfolk',
        156 => 'Noruega',
        157 => 'Nueva Caledonia',
        158 => 'Nueva Zelanda',
        159 => 'Omán',
        160 => 'Países Bajos',
        161 => 'Pakistán',
        162 => 'Palau',
        163 => 'Palestina',
        164 => 'Panamá',
        165 => 'Papúa Nueva Guinea',
        166 => 'Paraguay',
        167 => 'Perú',
        168 => 'Islas Pitcairn',
        169 => 'Polinesia Francesa',
        170 => 'Polonia',
        171 => 'Portugal',
        172 => 'Puerto Rico',
        173 => 'Qatar',
        174 => 'Reino Unido',
        175 => 'República Centroafricana',
        176 => 'República Checa',
        177 => 'República de Sudáfrica',
        178 => 'República Dominicana',
        179 => 'Ruanda',
        180 => 'Rumanía',
        181 => 'Rusia',
        182 => 'Sahara Occidental',
        183 => 'Islas Salomón',
        184 => 'Samoa Americana',
        185 => 'Samoa Occidental',
        186 => 'San Cristóbal y Nevis',
        187 => 'San Marino',
        188 => 'San Vicente y Granadinas',
        189 => 'Santa Elena',
        190 => 'Santa Lucía',
        191 => 'Santo Tomé y Principe',
        192 => 'Senegal',
        193 => 'Serbia',
        194 => 'Seychelles',
        195 => 'Sierra Leona',
        196 => 'Singapur',
        197 => 'Siria',
        198 => 'Somalia',
        199 => 'Sri Lanka',
        200 => 'Sudán',
        201 => 'Sudán Del Sur',
        202 => 'Suecia',
        203 => 'Suiza',
        204 => 'Islas Sur Georgia y Sandwich',
        205 => 'Surinam',
        206 => 'Swaziland',
        207 => 'Taiwán',
        208 => 'Tanzania',
        209 => 'Tayikistán',
        210 => 'Territorio Británico del Océano Índico',
        211 => 'Thailandia',
        212 => 'Tierras Australes Francesas',
        213 => 'Timor Este',
        214 => 'Timor Oriental',
        215 => 'Togo',
        216 => 'Tokelau',
        217 => 'Tonga',
        218 => 'Trinidad y Tobago',
        219 => 'Túnez',
        220 => 'Islas Turcas y Caicos',
        221 => 'Turkmenistán',
        222 => 'Turquía',
        223 => 'Tuvalu',
        224 => 'Ucrania',
        225 => 'Uganda',
        226 => 'Uruguay',
        227 => 'Uzbekistán',
        228 => 'Vanuatu',
        229 => 'Venezuela',
        230 => 'Vietnam',
        231 => 'Islas Wallis y Futuna',
        232 => 'Yemen',
        233 => 'Zambia',
        234 => 'Zimbabwe',
    ];
}
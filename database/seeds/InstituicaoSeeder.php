<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InstituicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('instituicao')->insert([
            'sigla' => '',
            'nome' => strtoupper(''),
            'municipio' => '',
            'uf' => '',
            'regiao'=>'',
            'categoria_administrativa' => '',
            'site' => '',
            'site_comissao_vestibular' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);*/

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('instituicao')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('instituicao')->insert([
            'sigla' => 'UNINILTONLINS',
            'nome' => strtoupper('UNIVERSIDADE NILTON LINS'),
            'municipio' => 'Manaus',
            'uf' => 'AM',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'http://universidadeniltonlins.com.br/',
            'site_comissao_vestibular' => 'https://www.tonauniversidade.com.br/Vestibular',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'UFPA',
            'nome' => strtoupper('UNIVERSIDADE FEDERAL DO PARÁ'),
            'municipio' => 'Belém',
            'uf' => 'PA',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Federal',
            'site' => 'https://www.portal.ufpa.br/',
            'site_comissao_vestibular' => 'http://ceps.ufpa.br/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'UFAM',
            'nome' => strtoupper('UNIVERSIDADE FEDERAL DO AMAZONAS'),
            'municipio' => 'Manaus',
            'uf' => 'AM',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Federal',
            'site' => 'https://ufam.edu.br/',
            'site_comissao_vestibular' => 'http://www.comvest.ufam.edu.br/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        /*DB::table('instituicao')->insert([
            'sigla' => 'UFAM',
            'nome' => strtoupper('UNIVERSIDADE FEDERAL DO AMAZONAS'),
            'municipio' => 'Coari',
            'uf' => 'AM',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Federal',
            'site' => 'https://ufam.edu.br/',
            'site_comissao_vestibular' => 'http://www.comvest.ufam.edu.br/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);*/

        DB::table('instituicao')->insert([
            'sigla' => 'UNIFAP',
            'nome' => strtoupper('UNIVERSIDADE FEDERAL DO AMAPÁ'),
            'municipio' => 'Macapá',
            'uf' => 'AP',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Federal',
            'site' => 'http://www.unifap.br/',
            'site_comissao_vestibular' => 'https://depsec.unifap.br/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'UFAC',
            'nome' => strtoupper('UNIVERSIDADE FEDERAL DO ACRE'),
            'municipio' => 'Rio Branco',
            'uf' => 'AC',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Federal',
            'site' => 'https://www.ufac.br/',
            'site_comissao_vestibular' => 'http://www.ufac.br/editais',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'UFRR',
            'nome' => strtoupper('UNIVERSIDADE FEDERAL DE RORAIMA'),
            'municipio' => 'Boa Vista',
            'uf' => 'RR',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Federal',
            'site' => 'http://ufrr.br/',
            'site_comissao_vestibular' => 'http://ufrr.br/cpv',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'UERR',
            'nome' => strtoupper('UNIVERSIDADE ESTADUAL DE RORAIMA'),
            'municipio' => 'Boa Vista',
            'uf' => 'RR',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Estadual',
            'site' => 'https://www.uerr.edu.br/',
            'site_comissao_vestibular' => 'https://cpc.uerr.edu.br/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        /*DB::table('instituicao')->insert([
            'sigla' => 'UEPA',
            'nome' => strtoupper('UNIVERSIDADE DO ESTADO DO PARÁ'),
            'municipio' => 'Santarém',
            'uf' => 'PA',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Estadual',
            'site' => 'http://www.uepa.br/',
            'site_comissao_vestibular' => 'https://www2.uepa.br/prosel/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);*/

        /*DB::table('instituicao')->insert([
            'sigla' => 'UEPA',
            'nome' => strtoupper('UNIVERSIDADE DO ESTADO DO PARÁ'),
            'municipio' => 'Marabá',
            'uf' => 'PA',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Estadual',
            'site' => 'http://www.uepa.br/',
            'site_comissao_vestibular' => 'https://www2.uepa.br/prosel/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);*/

        DB::table('instituicao')->insert([
            'sigla' => 'UEPA',
            'nome' => strtoupper('UNIVERSIDADE DO ESTADO DO PARÁ'),
            'municipio' => 'Belém',
            'uf' => 'PA',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Estadual',
            'site' => 'http://www.uepa.br/',
            'site_comissao_vestibular' => 'https://www2.uepa.br/prosel/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'UEA',
            'nome' => strtoupper('UNIVERSIDADE DO ESTADO DO AMAZONAS'),
            'municipio' => 'Manaus',
            'uf' => 'AM',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Estadual',
            'site' => 'http://www.uea.edu.br/',
            'site_comissao_vestibular' => 'https://www.vunesp.com.br/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'UnirG',
            'nome' => strtoupper('UNIVERSIDADE DE GURUPI'),
            'municipio' => 'Gurupi',
            'uf' => 'TO',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Municipal',
            'site' => 'http://www.unirg.edu.br/',
            'site_comissao_vestibular' => 'http://www.unirg.edu.br/vestibular.html',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        /*DB::table('instituicao')->insert([
            'sigla' => 'UFT',
            'nome' => strtoupper('FUNDAÇÃO UNIVERSIDADE FEDERAL DO TOCANTINS'),
            'municipio' => 'Araguaína',
            'uf' => 'TO',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Federal',
            'site' => 'https://ww2.uft.edu.br/',
            'site_comissao_vestibular' => 'http://www.copese.uft.edu.br/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);*/

        DB::table('instituicao')->insert([
            'sigla' => 'UFT',
            'nome' => strtoupper('FUNDAÇÃO UNIVERSIDADE FEDERAL DO TOCANTINS'),
            'municipio' => 'Palmas',
            'uf' => 'TO',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Federal',
            'site' => 'https://ww2.uft.edu.br/',
            'site_comissao_vestibular' => 'http://www.copese.uft.edu.br/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'UNIR',
            'nome' => strtoupper('FUNDAÇÃO UNIVERSIDADE FEDERAL DE RONDÔNIA'),
            'municipio' => 'Porto Velho',
            'uf' => 'RO',
            'regiao'=>'NORTE',
            'categoria_administrativa' => 'Pública Federal',
            'site' => 'https://www.unir.br/',
            'site_comissao_vestibular' => 'http://www.processoseletivo.unir.br/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'FIMCA',
            'nome' => strtoupper('FACULDADES INTEGRADAS APARÍCIO CARVALHO'),
            'municipio' => 'Porto Velho',
            'uf' => 'RO',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'http://www.fimca.com.br/',
            'site_comissao_vestibular' => 'http://www.vestfimca.com.br/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'FAPAC',
            'nome' => strtoupper('FACULDADE PRESIDENTE ANTÔNIO CARLOS'),
            'municipio' => 'Porto Nacional',
            'uf' => 'TO',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'http://www.itpacporto.com.br/Default.aspx',
            'site_comissao_vestibular' => 'http://www.itpacporto.com.br/vestibulareditais.aspx',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'FESAR',
            'nome' => strtoupper('FACULDADE DE ENSINO SUPERIOR DA AMAZÔNIA REUNIDA'),
            'municipio' => 'Redenção',
            'uf' => 'PA',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'http://www.fesar.com.br/Portal/',
            'site_comissao_vestibular' => 'http://www.fesar.com.br/Portal/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'FAEV',
            'nome' => strtoupper('FACULDADE DE EDUCAÇÃO E CULTURA DE VILHENA'),
            'municipio' => 'Vilhena',
            'uf' => 'RO',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'https://www.unescnet.br/vilhena/',
            'site_comissao_vestibular' => 'https://www.unescnet.br/vestibular/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'FAHESA/ITPAC PALMAS',
            'nome' => strtoupper('FACULDADE DE CIÊNCIAS HUMANAS, ECONÔMICAS E DA SAÚDE'),
            'municipio' => 'Palmas',
            'uf' => 'TO',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'https://www.itpacpalmas.com.br/',
            'site_comissao_vestibular' => 'https://www.itpacpalmas.com.br/sites/processos-seletivos',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'FACIMED',
            'nome' => strtoupper('FACULDADE DE CIÊNCIAS BIOMÉDICAS DE CACOAL'),
            'municipio' => 'Cacoal',
            'uf' => 'RO',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'http://www.facimed.edu.br/',
            'site_comissao_vestibular' => 'https://vestibular.facimed.edu.br/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'UNINORTE',
            'nome' => strtoupper('CENTRO UNIVERSITÁRIO UNINORTE'),
            'municipio' => 'Rio Branco',
            'uf' => 'AC',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'https://www.uninorte.com.br/',
            'site_comissao_vestibular' => 'https://www.uninorte.com.br/vestibular/?itm_source=uninorte.com.br/&itm_medium=menu_inscricao',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'UNITPAC',
            'nome' => strtoupper('Centro Universitário Tocantinense Presidente Antônio Carlos'),
            'municipio' => 'Araguaína',
            'uf' => 'TO',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'https://www.unitpac.com.br/inicio',
            'site_comissao_vestibular' => 'https://www.unitpac.com.br/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'UniSL',
            'nome' => strtoupper('CENTRO UNIVERSITÁRIO SÃO LUCAS'),
            'municipio' => 'Porto Velho',
            'uf' => 'RO',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'http://www.saolucas.edu.br/portal/',
            'site_comissao_vestibular' => 'http://www.saolucas.edu.br/portal/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'CESUPA',
            'nome' => strtoupper('CENTRO UNIVERSITÁRIO DO ESTADO DO PARÁ'),
            'municipio' => 'Belém',
            'uf' => 'PA',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'http://www.cesupa.br/',
            'site_comissao_vestibular' => 'http://www.cesupa.br/ProcSeletivo/vestibular/vest.asp',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'FAMAZ',
            'nome' => strtoupper('CENTRO UNIVERSITÁRIO DA FACULDADE METROPOLITANA DA AMAZÔNIA'),
            'municipio' => 'Belém',
            'uf' => 'PA',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'http://www.famaz.edu.br/portal/',
            'site_comissao_vestibular' => 'http://www.vestibularfamaz.com.br/hotsite/',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('instituicao')->insert([
            'sigla' => 'FAMETRO',
            'nome' => strtoupper('Centro Universitário - CEUNI - FAMETRO'),
            'municipio' => 'Manaus',
            'uf' => 'AM',
            'categoria_administrativa' => 'Privada',
            'regiao'=>'NORTE',
            'site' => 'http://www.fametro.edu.br/portal/',
            'site_comissao_vestibular' => 'http://www.fametro.edu.br/portal/index.php?u=pagina&c=411&cam=2330',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}

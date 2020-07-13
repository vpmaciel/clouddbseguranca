<?php

class Anuncio
{

    public static $valor_array = array(
            1 => 'https://ello.co/enter',
            2 => 'https://myopportunity.com/en/signin',
            3 => 'https://vestibular.unoparead.com.br/inscricao/',
            4 => 'https://diasporabr.com.br/users/sign_in',
            5 => 'https://tips4java.wordpress.com/2013/03/03/smart-scrolling/',
            6 => 'https://www.freelancermap.com/registration',
            7 => 'https://web.whatsapp.com/',
            8 => 'http://www.cvengenharia.com.br/',
            9 => 'https://www.vagas.com.br/',
            10 => 'https://trampos.co/',
            11 => 'https://www.globo.com/',
            12 => 'https://www.r7.com/',
            13 => 'https://www.sbt.com.br/home/',
            14 => 'http://www.ufop.br/',
            15 => 'http://www.ufop.br/',
            16 => 'https://www.altillo.com/pt/universidades/brasil/estado/minasgerais.asp',
            17 => 'https://www.unip.br/Ead/Ensino/Cursos_Graduacao_Pos_Graduacao',
            18 => 'https://simulado.infoenem.com.br/',
            19 => 'https://fael.edu.br/cursos/graduacao',
            20 => 'https://www.faculdadeunica.com.br/',
            21 => 'http://www.igti.com.br/cursos/mba-em-projeto-de-aplicacoes-java/',
            22 => 'https://www.esab.edu.br/pos-graduacao-ead/mba-profissional/',
            23 => 'https://www.portalpos.com.br/',
            24 => 'https://claretiano.edu.br/',
            25 => 'https://www.uninter.com',
            26 => 'https://www.uninter.com/graduacao-ead/curso-relacoes-internacionais/',
            27 => 'http://www.cursosonlinesp.com.br/',
            28 => 'https://www.faculdadeunica.com.br/ead/graduacao/',
            29 => 'http://univirtus.uninter.com/ava/web/',
            30 => 'https://universidade.solides.com.br/course/people-analytics/#'
        );
    
    public static function retornarArquivo()
    {
        return rand(1, 30);
    }
}

class AreaInteresse
{

    public static $valor_array = array(
            1 => 'ADMINISTRAÇÃO COMERCIAL/VENDAS',
            2 => 'ADMINISTRAÇÃO DE EMPRESAS',
            3 => 'ADMINISTRAÇÃO PÚBLICA',
            4 => 'ADVOCACIA/JURÁDICA',
            5 => 'AGRONOMIA',
            6 => 'ARQUITETURA/URBANISMO',
            7 => 'ARQUIVOLOGIA',
            8 => 'ARTES CÊNICAS',
            9 => 'ARTES GRÁFICAS',
            10 => 'ARTES PLÁSTICAS',
            11 => 'ATENDIMENTO AO CLIENTE - BARES E RESTAURANTES',
            12 => 'ATENDIMENTO AO CLIENTE - TELEFONISTAS/RECEPCIONISTAS',
            13 => 'ATENDIMENTO AO CLIENTE - TELEMARKETING/CALL CENTER',
            14 => 'ATENDIMENTO AO CLIENTE',
            15 => 'AUDITORIA',
            16 => 'BANCOS',
            17 => 'BIBLIOTECONOMIA',
            18 => 'BIOLOGIA/CIÊNCIAS BIOLÓGICAS',
            19 => 'BIOMEDICINA',
            20 => 'CIÊNCIAS SOCIAIS',
            21 => 'CINEMA',
            22 => 'COMÉRCIO',
            23 => 'COMÉRCIO EXTERIOR',
            24 => 'COMPRAS',
            25 => 'COMUNICAÇÃO',
            26 => 'CONSTRUÇÃO CIVIL',
            27 => 'CONTABILIDADE',
            28 => 'CONTROLADORIA',
            29 => 'CULINÁRIA/GASTRONOMIA',
            30 => 'DESENHO INDUSTRIAL',
            31 => 'DESIGN DE INTERIORES',
            32 => 'DESIGN GRÁFICO',
            33 => 'ECOLOGIA/MEIO AMBIENTE',
            34 => 'ECONOMIA',
            35 => 'ENFERMAGEM',
            36 => 'ENGENHARIA DE ALIMENTOS',
            37 => 'ENGENHARIA CIVIL',
            38 => 'ENGENHARIA ELETRÔNICA',
            39 => 'ENGENHARIA ELÉTRICA',
            40 => 'ENGENHARIA MECÂNICA',
            41 => 'ENGENHARIA METALÚRGICA E DE MATERIAIS',
            42 => 'ENGENHARIA DE MINAS',
            43 => 'ENGENHARIA DE PRODUÇÃO',
            44 => 'ENGENHARIA QUÍMICA',
            45 => 'ENGENHARIA - OUTRAS',
            46 => 'ENSINO SUPERIOR E PESQUISA',
            47 => 'ENSINO - OUTROS',
            48 => 'ENTRETERIMENTO',
            49 => 'ESPORTES',
            50 => 'ESTÉTICA',
            51 => 'FARMÁCIA',
            52 => 'FILOSOFIA',
            53 => 'FINANÇAS',
            54 => 'FISCAL',
            55 => 'FÍSICA',
            56 => 'FISIOTERAPIA',
            57 => 'FONOAUDIOLOGIA',
            58 => 'GEOGRAFIA',
            59 => 'GEOLOGIA',
            60 => 'GESTÃO EMPRESARIAL',
            61 => 'HISTÓRIA',
            62 => 'HOTELARIA',
            63 => 'INDÚSTRIA',
            64 => 'INFORMÁTICA/T.I.',
            65 => 'INTERNET',
            66 => 'JORNALISMO',
            67 => 'LETRAS',
            68 => 'LOGÍSTICA',
            69 => 'MANUTENÇÃO INDUSTRIAL',
            70 => 'MANUTENÇÃO PREDIAL',
            71 => 'MATEMÁTICA/ESTATÍSTICA',
            72 => 'MEDICINA/HOSPITALAR',
            73 => 'METEOROLOGIA',
            74 => 'MINERAÇÃO',
            75 => 'MODA',
            76 => 'MUSEOLOGIA',
            77 => 'MÚSICA',
            78 => 'NUTRIÇÃO',
            79 => 'OCEANOGRAFIA',
            80 => 'ODONTOLOGIA',
            81 => 'ORGANIZAÇÃO DE EVENTOS/PRODUÇÃO CULTURAL',
            82 => 'ORGANIZAÇÃO E MÉTODOS',
            83 => 'PEDAGOGIA',
            84 => 'PESQUISA DE MERCADO',
            85 => 'PETROLÍFERA',
            86 => 'PRODUÇÃO/FABRICAÇÃO',
            87 => 'PROFESSOR',
            88 => 'PROPAGANDA/MARKETING',
            89 => 'PSICOLOGIA',
            90 => 'QUALIDADE',
            91 => 'QUÍMICA',
            92 => 'RADIALISMO E TELEVISÃO',
            93 => 'RECURSOS HUMANOS',
            94 => 'RELAÇÕES INTERNACIONAIS',
            95 => 'RELAÇÕES PÚBLICAS',
            96 => 'SECRETARIADO',
            97 => 'SEGURANÇA E SAÚDE NO TRABALHO',
            98 => 'SEGURANÇA PATRIMONIAL',
            99 => 'SEGUROS',
            100 => 'SERVIÇO SOCIAL',
            101 => 'SERVIÇOS',
            102 => 'SERVIÇOS ADMINISTRATIVOS',
            103 => 'SERVIÇOS DOMÉSTICOS',
            104 => 'SERVIÇOS ESPECIALIZADOS - AÇOUGUE',
            105 => 'SERVIÇOS ESPECIALIZADOS - PADARIA/CONFEITARIA',
            106 => 'SERVIÇOS ESPECIALIZADOS - PEIXARIA',
            107 => 'SERVIÇOS GERAIS',
            108 => 'SERVIÇOS TÉCNICOS - ELÉTRICOS',
            109 => 'SERVIÇOS TÉCNICOS - ELETRÔNICOS',
            110 => 'SERVIÇOS TÉCNICOS - MECÂNICOS',
            111 => 'SERVIÇOS TÉCNICOS - OUTROS',
            112 => 'SUPRIMENTOS',
            113 => 'TELECOMUNICAÇÕES',
            114 => 'TERAPIA OCUPACIONAL',
            115 => 'TERCEIRO SETOR/RESPONSABILIDADE SOCIAL',
            116 => 'TRADUÇÃO/INTERPRETAÇÃO',
            117 => 'TRANSPORTE AÉREO',
            118 => 'TRANSPORTE MARÍTIMO',
            119 => 'TRANSPORTE TERRESTRE',
            120 => 'TRIBUTÁRIA',
            121 => 'TURISMO',
            122 => 'VENDAS',
            123 => 'VENDAS - VAREJO',
            124 => 'VENDAS - TÉCNICAS',
            125 => 'VETERINÁRIA',
            126 => 'WEB DESIGN',
            127 => 'ZOOLOGIA',
            128 => 'ZOOTECNIA'
        );
}

class Cnh
{

    public static $valor_array = array(
            1 => 'NÃO POSSUI',
            2 => 'A',
            3 => 'B',
            4 => 'C',
            5 => 'D',
            6 => 'E'
        );
}

class Contrato
{

    public static $valor_array = array(
            1 => 'EFETIVO (CLT)',
            2 => 'ESTÁGIO',
            3 => 'TEMPORÁRIO',
            4 => 'AUTÔNOMO',
            5 => 'PRESTADOR DE SERVIÇOS (PJ)',
            6 => 'TRAINEE',
            7 => 'COOPERADO',
            8 => 'OUTROS'
        );
}

class Cpf
{

    public function validarCPF($cpf)
    {
        // determina um valor inicial para o digito $d1 e $d2
        // pra manter o respeito ;)
        $d1 = 0;
        $d2 = 0;
        // remove tudo que não seja número
        $cpf = preg_replace("/[^0-9]/", "", $cpf);
        // lista de cpf inválidos que serão ignorados
        $ignore_list = array(
            '00000000000',
            '01234567890',
            '11111111111',
            '22222222222',
            '33333333333',
            '44444444444',
            '55555555555',
            '66666666666',
            '77777777777',
            '88888888888',
            '99999999999'
        );
        // se o tamanho da string for dirente de 11 ou estiver
        // na lista de cpf ignorados já retorna false
        if (strlen($cpf) != 11 || in_array($cpf, $ignore_list)) {
            return false;
        } else {
            // inicia o processo para achar o primeiro
            // número verificador usando os primeiros 9 dígitos
            for ($i = 0; $i < 9; $i ++) {
                // inicialmente $d1 vale zero e é somando.
                // O loop passa por todos os 9 dígitos iniciais
                $d1 += $cpf[$i] * (10 - $i);
            }
            // acha o resto da divisão da soma acima por 11
            $r1 = $d1 % 11;
            // se $r1 maior que 1 retorna 11 menos $r1 se não
            // retona o valor zero para $d1
            $d1 = ($r1 > 1) ? (11 - $r1) : 0;
            // inicia o processo para achar o segundo
            // número verificador usando os primeiros 9 dígitos
            for ($i = 0; $i < 9; $i ++) {
                // inicialmente $d2 vale zero e é somando.
                // O loop passa por todos os 9 dígitos iniciais
                $d2 += $cpf[$i] * (11 - $i);
            }
            // $r2 será o resto da soma do cpf mais $d1 vezes 2
            // dividido por 11
            $r2 = ($d2 + ($d1 * 2)) % 11;
            // se $r2 mair que 1 retorna 11 menos $r2 se não
            // retorna o valor zeroa para $d2
            $d2 = ($r2 > 1) ? (11 - $r2) : 0;
            // retona true se os dois últimos dígitos do cpf
            // forem igual a concatenação de $d1 e $d2 e se não
            // deve retornar false.
            return (substr($cpf, - 2) == $d1 . $d2) ? true : false;
        }
    }
}

class Deficiencia
{

    public static $valor_array = array(
            1 => 'NÃO',
            2 => 'MOTORA',
            3 => 'FÍSICA',
            4 => 'MENTAL',
            5 => 'AUDITIVA',
            6 => 'VISUAL',
            7 => 'FALA',
            8 => 'MÚLTIPLA'
        );
}

class Escolaridade
{

    public static $valor_array = array(
            1 => 'PÓS DOUTORADO',
            2 => 'DOUTORADO',
            3 => 'MESTRADO',
            4 => 'ESPECIALIZAÇÃO',
            5 => 'SUPERIOR COMPLETO',
            6 => 'SUPERIOR INCOMPLETO',
            7 => 'SEGUNDO GRAU COMPLETO',
            8 => 'SEGUNDO GRAU INCOMPLETO',
            9 => 'PRIMEIRO GRAU COMPLETO',
            10 => 'PRIMEIRO GRAU INCOMPLETO'
        );
}

class Estado
{

    public static $valor_array = array(
            1 => 'ACRE',
            2 => 'ALAGOAS',
            3 => 'AMAPÁ',
            4 => 'AMAZONAS',
            5 => 'BAHIA',
            6 => 'CEARÁ',
            7 => 'DISTRITO FEDERAL',
            8 => 'ESPÍRITO SANTO',
            9 => 'GOIÁS',
            10 => 'MARANHÃO',
            11 => 'MATO GROSSO',
            12 => 'MATO GROSSO DO SUL',
            13 => 'MINAS GERAIS',
            14 => 'PARÁ',
            15 => 'PARAÍBA',
            16 => 'PARANÁ',
            17 => 'PERNAMBUCO',
            18 => 'PIAUÍ',
            19 => 'RIO DE JANEIRO',
            20 => 'RIO GRANDE DO NORTE',
            21 => 'RIO GRANDE DO SUL',
            22 => 'RONDÔNIA',
            23 => 'RORAIMA',
            24 => 'SANTA CATARINA',
            25 => 'SÃO PAULO',
            26 => 'SERGIPE',
            27 => 'TOCANTINS'
        );
}

class EstadoCivil
{

    public static $valor_array = array(
            1 => 'SOLTEIRO',
            2 => 'CASADO',
            3 => 'SEPARADO',
            4 => 'DIVORCIADO',
            5 => 'VIÚVO'
        );
}

class Modalidade
{

    public static $valor_array = array(
            1 => 'LICENCIATURA',
            2 => 'BACHARELADO',
            3 => 'MBA',
            4 => 'TECNOLÓGO',
            5 => 'TÉCNICO',
            6 => 'ENSINO MÉDIO',
            7 => 'ENSINO FUNDAMENTAL'
        );
}

class Nacionalidade
{

    public static $valor_array = array(
            1 => 'BRASILEIRO(A) NATO (A)',
            2 => 'BRASILEIRO(A) NATURALIZADO (A)',
            3 => 'ESTRANGEIRO'
        );
}

class NivelConhecimento
{

    public static $valor_array = array(
            1 => 'BÁSICO',
            2 => 'INTERMEDIÁRIO',
            3 => 'AVANÇADO'
        );
}

class NivelHierarquico
{

    public static $valor_array = array(
            1 => 'ESTRATÉGICO OU INSTITUCIONAL',
            2 => 'TÁTICO OU INTERMEDIÁRIO',
            3 => 'GESTORES E SUPERVISORES',
            4 => 'OPERACIONAL'
        );
}

class Pais
{

    public static $valor_array = array(
        1 => 'BRASIL',
        2 => 'EXTERIOR'
    );
}

class PretensaoSalarial
{

    public static $valor_array = array(
        1 => 'A COMBINAR',
        2 => 'ACIMA DE R$ 1.000,00',
        3 => 'ACIMA DE R$ 2.000,00',
        4 => 'ACIMA DE R$ 3.000,00',
        5 => 'ACIMA DE R$ 4.000,00',
        6 => 'ACIMA DE R$ 5.000,00',
        7 => 'ACIMA DE R$ 6.000,00',
        8 => 'ACIMA DE R$ 7.000,00',
        9 => 'ACIMA DE R$ 8.000,00',
        10 => 'ACIMA DE R$ 9.000,00',
        11 => 'ACIMA DE R$ 10.000,00',
        12 => 'ACIMA DE R$ 15.000,00',
        13 => 'ACIMA DE R$ 20.000,00',
        14 => 'ACIMA DE R$ 25.000,00',
        15 => 'ACIMA DE R$ 30.000,00',
        16 => 'ACIMA DE R$ 35.000,00',
        17 => 'ACIMA DE R$ 40.000,00',
        18 => 'ACIMA DE R$ 45.000,00',
        19 => 'ACIMA DE R$ 50.000,00'
    );
}

class Resposta
{

    public static $valor_array = array(
        1 => 'SIM',
        2 => 'NÃO'
    );
}

class Sexo
{

    public static $valor_array = array(
        1 => 'Masculino',
        2 => 'Feminino'
    );
}

class Situacao
{

    public static $valor_array = array(
        1 => 'CONCLUÍDO',
        2 => 'NÃO CONCLUÍDO',
        3 => 'EM ANDAMENTO'
    );
}

class Html
{
    
    public static function configurar($valor)
    {
        return '"' . $valor . '"';
    }
    
    public static function formatar($valor) {
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);
        $valor = strtoupper($valor);
        return $valor;
    }
}

$cnh_array = Cnh::$valor_array;

$sexo_array = Sexo::$valor_array;

$deficiencia_array = Deficiencia::$valor_array;

$escolaridade_array = Escolaridade::$valor_array;

$contrato_array = Contrato::$valor_array;

$ultimo_salario_array = PretensaoSalarial::$valor_array;

$nivel_hierarquico_array = NivelHierarquico::$valor_array;

$area_interesse_array = AreaInteresse::$valor_array;

$estado_array = Estado::$valor_array;

$estado_civil_array = EstadoCivil::$valor_array;

$nacionalidade_array = Nacionalidade::$valor_array;

$pais_array = Pais::$valor_array;

$resposta_array = Resposta::$valor_array;
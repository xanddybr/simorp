## Description Application

`Name`: SIMORP
`type`: web-app
`Description`: Sistema de Monitoramento de Registro de Preço
`version`: 1.0.0
`languges`: PHP, Javascritp, Html, CSS
`Framework`: none
`Libraries-use`: Bootstraps,JQuery
`Architecture`: MVC
`Notes-release`:

[

0326.1750 : implemented method post(refinament)
0325.1820 : implemented method post
0321.1805 : get/post/put/delete (refinament)
0320.1815 : implemented Class authAPI and Class Generic Requests API to make post/get/put/delete (refinament)
0318.1819 : implemented Class authAPI and Class Generic Requests API to make post/get/put/delete
0315.1836 : created script curl get/post/put/delete and fixed cookie error on logon
0314.1925 : Implemented cookie timeUser expired 10hs, remove storage password user of cookie checkUser
0313.1800 : autentication in API end-point (refinament)
0312.1552 : Implement and set autentication in API end-point (refinament)
0309.1357 : Correction issue function makeCookie
0311.1805 : Implement and set autentication in API end-point (refinament)
0309.1357 : Correction issue function makeCookie
0311.1805 : Implement and set autentication in API end-point (refinament) 
0308.1652 : Implement and set autentication in API end:point
0304.1801 : Implement autentication in API (refinament)
0303.2123 : Implement autentication in API
0303.0536 : Implement Storege cookie of user in browser
0301.1243 : Implement Session system on mvc with routes (refinament)
0227.1800 : Implement Session system on mvc with routes (refinament)
0227.1800 : Implement Session system on mvc with routes
0226.1956 : Deployer system router on mvc

]


 http://10.3.15.200:8002/

 "orgaos": "http://10.3.15.200:8002/orgaos/",
 "orgaoslogs": "http://10.3.15.200:8002/orgaoslogs/",
 "solicitacoes": "http://10.3.15.200:8002/solicitacoes/",
 "solicitacoeslogs": "http://10.3.15.200:8002/solicitacoeslogs/",
 "objetos": "http://10.3.15.200:8002/objetos/",
 "objetoslogs": "http://10.3.15.200:8002/objetoslogs/"

-------------------------------------------------------------------------------

 "orgaos": "http://10.3.15.200:8002/orgaos/",

    {
        "id": 4,
        "nome": "MARINHA2055",
        "usuario": "allan",
        "created_at": "2024-01-04T17:37:19",
        "updated_at": "2024-03-15T21:31:30"
    }

--------------------------------------------------------------------------------

"orgaoslogs": "http://10.3.15.200:8002/orgaoslogs/",

    {
        "id": 255,
        "usuario": "Alexandre",
        "data_hora": "2024-03-15T22:14:16",
        "operacao": "VISUALIZADO",
        "orgao": null,
        "orgao_data": null,
        "orgao_id": null
    }

--------------------------------------------------------------------------------

"solicitacoes": "http://10.3.15.200:8002/solicitacoes/",


    {
        "id": 7,
        "data_recebimento": "2024-01-11",
        "data_encaminhamento": "2024-01-10",
        "created_at": "2024-01-04T16:39:30",
        "updated_at": "2024-01-25T16:34:15",
        "Lista_objetos": [
            "Curso de Django rest Framework",
            "Curso de Django Rest Framework Avançado2",
            "FASDFASDFASDF",
            "Curso de Django Rest Framework Avançado",
            "Repositório ordenado de preços"
        ],
        "tipo_solicitacao": "REGISTRO DE PRECO",
        "tipo_objeto": "MATERIAL",
        "processo": "sei",
        "numero_ata": "12345",
        "tipo_ata": "INTERNA",
        "observacao": "asdasd",
        "valor_total": 10915.0,
        "usuario": "allan",
        "orgao": "SEPLAG",
        "objetos": [
            {
                "id": 3,
                "usuario": "allan",
                "created_at": "2024-01-03T20:29:13",
                "updated_at": "2024-01-25T14:52:36",
                "tipo_objeto": "SERVICO",
                "quantidade": 1,
                "descricao": "Curso de Django rest Framework",
                "unidade": "real",
                "valor_unitario": "4.00",
                "sub_total": "4.00"
            },
            {
                "id": 4,
                "usuario": "allan",
                "created_at": "2024-01-04T14:30:39",
                "updated_at": "2024-01-25T16:33:52",
                "tipo_objeto": "SERVICO",
                "quantidade": 1,
                "descricao": "Curso de Django Rest Framework Avançado2",
                "unidade": "mensal",
                "valor_unitario": "1.00",
                "sub_total": "1.00"
            },
            {
                "id": 5,
                "usuario": "allan",
                "created_at": "2024-01-04T14:34:41",
                "updated_at": "2024-01-25T16:25:13",
                "tipo_objeto": "SERVICO",
                "quantidade": 100,
                "descricao": "FASDFASDFASDF",
                "unidade": "jars",
                "valor_unitario": "100.00",
                "sub_total": "10000.00"
            },
            {
                "id": 6,
                "usuario": "allan",
                "created_at": "2024-01-04T16:40:56",
                "updated_at": "2024-01-24T22:00:24",
                "tipo_objeto": "SERVICO",
                "quantidade": 100,
                "descricao": "Curso de Django Rest Framework Avançado",
                "unidade": "mensal",
                "valor_unitario": "9.00",
                "sub_total": "900.00"
            },
            {
                "id": 7,
                "usuario": "Allan Domingos",
                "created_at": "2024-01-24T21:37:42",
                "updated_at": "2024-01-25T14:17:05",
                "tipo_objeto": "MATERIAL",
                "quantidade": 10,
                "descricao": "Repositório ordenado de preços",
                "unidade": "$",
                "valor_unitario": "1.00",
                "sub_total": "10.00"
            }
        ]
    }
    
--------------------------------------------------------------------------

"solicitacoeslogs": "http://10.3.15.200:8002/solicitacoeslogs/",

   {
        "id": 230,
        "usuario": "Alexandre",
        "data_hora": "2024-03-15T22:17:09",
        "operacao": "VISUALIZADO",
        "solicitacao": null,
        "solicitacao_data": null,
        "solicitacao_id": null
    }

-------------------------------------------------------------------------

"objetos": "http://10.3.15.200:8002/objetos/",


    {
        "id": 10,
        "usuario": "Alexandre",
        "created_at": "2024-03-15T17:29:32",
        "updated_at": "2024-03-15T17:41:13",
        "tipo_objeto": "MATERIAL",
        "quantidade": 200,
        "descricao": "CAIXA DE MORANGO",
        "unidade": "CX",
        "valor_unitario": "30.00",
        "sub_total": "6000.00"
    }

--------------------------------------------------------------------------

"objetoslogs": "http://10.3.15.200:8002/objetoslogs/"

    {
        "id": 106,
        "usuario": "Alexandre",
        "data_hora": "2024-03-15T22:20:58",
        "operacao": "VISUALIZADO",
        "objeto": null,
        "objeto_data": null,
        "objeto_id": null
    }

-------------------------------------------------------------------------
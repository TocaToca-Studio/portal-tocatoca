<?php 
require_once __DIR__.'/../core/config.inc.php';


$newsletter=DIV()->w_100()->bg_dark()->white()->add([
    CONTAINER([
        ROW([
            COL([
                FLEXROW([
                    I("envelope")->s(4),
                    DIV("Cadastre seu e-mail e fique por dentro das últimas novidades e informações exclusivas!")->fill()->px(2)->h4()
                ])
            ])->xs(12)->lg(6),
            COL([
                FORM()->post()->add([
                    INPUTGROUP(false,
                        TEXTINPUT("Endereço de email")->email()->minlength(4)->required(),
                        BUTTON("Inscrever-se")->submit()->primary()
                    )
                ])
            ])->xs(12)->lg(6),
        ])->items_center()
    ])
]);
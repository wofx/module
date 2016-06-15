<?php
// SETA TIME ZONE DO APACHE
date_default_timezone_set('America/Sao_Paulo');

return array(
    'controllers' => array(
        'invokables' => array(
            'Apcap_mobile\Controller\Validacao' => 'Apcap_mobile\Controller\ValidacaoController',
            'Apcap_mobile\Controller\Vincular' => 'Apcap_mobile\Controller\VincularController',
            'Apcap_mobile\Controller\Apcaps' => 'Apcap_mobile\Controller\ApcapController',
            'Apcap_mobile\Controller\Login' => 'Apcap_mobile\Controller\LoginController',
            'Apcap_mobile\Controller\Pessoas' => 'Apcap_mobile\Controller\PessoaController',
            'Apcap_mobile\Controller\Mensagem' => 'Apcap_mobile\Controller\MensagensController',
            'Apcap_mobile\Controller\Termos' => 'Apcap_mobile\Controller\TermosController',
            'Apcap_mobile\Controller\Carrinho' => 'Apcap_mobile\Controller\CarrinhoController',
        )
    ),
    'router' => array(
        'routes' => array(
            
            // ROTA Validacao de Apcap
            'validacaoApcap' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/validarApcap',
                    'controller' => 'Validacao'
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    'vincularApcap' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Validacao',
                                'action' => 'validarApcap'
                            )
                        )
                    )
                )
            ),
            
            // Vincular Apcaps
            'vincularApcap' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/vincularApcap',
                    'controller' => 'Vincular'
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    'vincularApcap' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Vincular',
                                'action' => 'vincularApcap'
                            )
                        )
                    )
                )
            ),
            
            // vincularTituloApcap
            'vincularTituloApcap' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/vincularTituloApcap',
                    'controller' => 'Vincular'
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    'vincularApcap' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Vincular',
                                'action' => 'vincularTituloApcap'
                            )
                        )
                    )
                )
            ),
            
            // Meus Apcaps
            'consultarMeusApcaps' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/consultarMeusApcaps',
                    'controller' => 'Apcaps'
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    'vincularApcap' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'get',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Apcaps',
                                'action' => 'consultarMeusApcaps'
                            )
                        )
                    )
                )
            ),
            
            // Meus Apcaps
            'login' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/login',
                    'controller' => 'Login'
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    'login' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Login',
                                'action' => 'login'
                            )
                        )
                    )
                )
            ),
            
            //ROTA Serie
            'pessoa' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/pessoas',
                    'controller' => 'Pessoas',
                ),
                'may_terminate' => false,
                'child_routes' => array(
            
                    'listar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'get',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Pessoas',
                                'action' => 'listar'
                            ),
                        ),
                    )
                ),
            ),
            
            // ROTA Mensagem
            'mensagem' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/mensagem',
                    'controller' => 'Mensagem'
                ),
                'may_terminate' => false,
                'child_routes' => array(
            
                    'listar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'get',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Mensagem',
                                'action' => 'listar'
                            )
                        )
                    ),
                    'salvar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Mensagem',
                                'action' => 'salvar'
                            )
                        )
                    ),
                    'editar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'put',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Mensagem',
                                'action' => 'editar'
                            )
                        )
                    ),
                    'pesquisarId' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:id]',
                            'constraints' => array(
                                'id' => '[0-9]+'
                            ),
            
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Mensagem',
                                'action' => 'recuperarPorId'
                            )
                        )
                    )
                )
            ),
            
            // ROTA Termo
            'termo' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/termo',
                    'controller' => 'Termos'
                ),
                'may_terminate' => false,
                'child_routes' => array(
            
                    'listar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'get',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Termos',
                                'action' => 'listar'
                            )
                        )
                    ),
                    'salvar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Termos',
                                'action' => 'salvar'
                            )
                        )
                    ),
                    'editar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'put',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Termos',
                                'action' => 'editar'
                            )
                        )
                    ),
                    'pesquisarId' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:id]',
                            'constraints' => array(
                                'id' => '[0-9]+'
                            ),
            
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Termos',
                                'action' => 'recuperarPorId'
                            )
                        )
                    )
                )
            ),
            
            
            // ROTA Carrinho
            'carrinho' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/carrinho',
                    'controller' => 'Carrinho'
                ),
                'may_terminate' => false,
                'child_routes' => array(
            
                    'listar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'get',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Carrinho',
                                'action' => 'listar'
                            )
                        )
                    ),
                    'salvar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Carrinho',
                                'action' => 'salvar'
                            )
                        )
                    ),
                    'editar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'put',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Carrinho',
                                'action' => 'editar'
                            )
                        )
                    ),
                    'pesquisarId' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:id]',
                            'constraints' => array(
                                'id' => '[0-9]+'
                            ),
            
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_mobile\Controller',
                                'controller' => 'Carrinho',
                                'action' => 'recuperarPorId'
                            )
                        )
                    )
                )
            ),
            
                                                                                       
            
            //next rote
        )
    ),
    
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy'
        )
    )
);


<?php
#SETA TIME ZONE DO APACHE
date_default_timezone_set('America/Sao_Paulo');

return array(
    'controllers' => array(
        'invokables' => array(
            'Apcap_iadm\Controller\TipoBem' => 'Apcap_iadm\Controller\TipoBemController',
            'Apcap_iadm\Controller\TipoSorteio' => 'Apcap_iadm\Controller\TipoSorteioController',
            'Apcap_iadm\Controller\TipoPessoa' => 'Apcap_iadm\Controller\TipoPessoaController',
            'Apcap_iadm\Controller\Promocao' => 'Apcap_iadm\Controller\PromocaoController',
            'Apcap_iadm\Controller\Sorteio' => 'Apcap_iadm\Controller\SorteioController',
            'Apcap_iadm\Controller\Serie' => 'Apcap_iadm\Controller\SerieController',
            
        )
    ),
    'router' => array(
        'routes' => array(
            
            // ROTA TipoBem
            'tipobem' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/tipobem',
                    'controller' => 'TipoBem'
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    
                    'listar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'get',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'TipoBem',
                                'action' => 'listar'
                            )
                        )
                    ),
                    'salvar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'TipoBem',
                                'action' => 'salvar'
                            )
                        )
                    ),
                    'editar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'put',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'TipoBem',
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
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'TipoBem',
                                'action' => 'recuperarPorId'
                            )
                        )
                    )
                )
            ),
            
            // ROTA TipoSorteio
            'tiposorteio' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/tiposorteio',
                    'controller' => 'TipoSorteio'
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    
                    'listar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'get',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'TipoSorteio',
                                'action' => 'listar'
                            )
                        )
                    ),
                    'salvar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'TipoSorteio',
                                'action' => 'salvar'
                            )
                        )
                    ),
                    'editar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'put',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'TipoSorteio',
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
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'TipoSorteio',
                                'action' => 'recuperarPorId'
                            )
                        )
                    )
                )
            ),
            
            // ROTA TipoPessoa
            'tipopessoa' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/tipopessoa',
                    'controller' => 'TipoPessoa'
                ),
                'may_terminate' => false,
                'child_routes' => array(
            
                    'listar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'get',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'TipoPessoa',
                                'action' => 'listar'
                            )
                        )
                    ),
                    'salvar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'TipoPessoa',
                                'action' => 'salvar'
                            )
                        )
                    ),
                    'editar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'put',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'TipoPessoa',
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
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'TipoPessoa',
                                'action' => 'recuperarPorId'
                            )
                        )
                    )
                )
            ),
            
            // ROTA Promocao
            'promocao' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/promocao',
                    'controller' => 'Promocao'
                ),
                'may_terminate' => false,
                'child_routes' => array(
                    
                    'listar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'get',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'Promocao',
                                'action' => 'listar'
                            )
                        )
                    ),
                    'salvar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'Promocao',
                                'action' => 'salvar'
                            )
                        )
                    ),
                    'editar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'put',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'Promocao',
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
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'Promocao',
                                'action' => 'recuperarPorId'
                            ),
                        ),
                    ),
                ),
            ),
            
            
            // ROTA Sorteio
            'sorteio' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/sorteio',
                    'controller' => 'Sorteio'
                ),
                'may_terminate' => false,
                'child_routes' => array(
            
                    'listar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'get',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'Sorteio',
                                'action' => 'listar'
                            )
                        )
                    ),
                    'salvar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'Sorteio',
                                'action' => 'salvar'
                            )
                        )
                    ),
                    'editar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'put',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'Sorteio',
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
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'Sorteio',
                                'action' => 'recuperarPorId'
                            ),
                        ),
                    ),
                ),
            ),
            
            //ROTA Serie
            'serie' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/serie',
                    'controller' => 'Serie',
                ),
                'may_terminate' => false,
                'child_routes' => array(
            
                    'listar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'get',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'Serie',
                                'action' => 'listar'
                            ),
                        ),
                    ),
                    'salvar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'post',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'Serie',
                                'action' => 'salvar'
                            ),
                        ),
                    ),
                    'editar' => array(
                        'type' => 'method',
                        'options' => array(
                            'verb' => 'put',
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'Serie',
                                'action' => 'editar'
                            ),
                        ),
                    ),
                    'pesquisarId' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:id]',
                            'constraints' => array(
                                'id' => '[0-9]+',
                            ),
            
                            'defaults' => array(
                                '__NAMESPACE__' => 'Apcap_iadm\Controller',
                                'controller' => 'Serie',
                                'action' => 'recuperarPorId'
                            ),
                        ),
                    ),
                ),
            ),
            
            
            //Next route

        )        
    ),
    
    'view_manager' => array(
        
        'strategies' => array(
            
            'ViewJsonStrategy'
        )
    )
);


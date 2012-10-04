<!-- ======================================================================================= -->
<!--                                                                              COL-RIGHT  -->
<!-- ======================================================================================= -->
<div id="col-right" <?php if(is_home()): ?> class="col-right-index" <?php endif; ?>>
    <div id="orcamento">
            <div class="titulo-orcamento"><img src="<?php bloginfo('template_url') ?>/imgs/titulo/orcamento.png" width="275" height="58" alt="Orcamento"></div>
            <ul id="nav">
                <li class="ativo">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>                                                
            </ul>
            <div class="clearfix"></div>
            <form id="form-lateral" action="<?php echo home_url('orcamento') ?>" method="get" accept-charset="utf-8">
                     <fieldset id="" class="primeiro"> 
                        <legend>Tipo de Serviço a ser Fornecido</legend>
                        <ul>
                            <li>
                                <label><input type="checkbox" name="refeicao_feita_no_local" value="Refeição feita no Local - mínimo 250 refeições/dia<" id="refeicao_feita_no_local"/> Refeição feita no Local - mínimo 250 refeições/dia</label>

                            </li>

                            <li>
                                <label><input type="checkbox" name="transportada_servido_no_local" value="Transportada e servida no local - mínimo 150 refeições/dia" id="transportada_servido_no_local"/> Transportada e servida no local - mínimo 150 refeições/dia</label>                 
                            </li>

                            <li>
                                <label><input type="checkbox" name="transportada_quentinha" value="Transportada / Quentinha - mínimo 150 refeições/dia" id="transportada_quentinha"/> Transportada / Quentinha - mínimo 150 refeições/dia:</label>
                            </li>
                        </ul>
                        <img class="proximo" src="<?php bloginfo('template_url') ?>/imgs/btn/btn-proximo-passo.png" width="115" height="29" alt="Btn Proximo Passo">
                    </fieldset>

                    <fieldset id="" class="">
                        <legend>Modalidade de Fornecimento</legend>
                        <ul>
                            <li>
                                <input type="checkbox" name="modalidade_fornecimento[]" value="Desjejum" id="refeicao_feita_no_local"/> Desjejum 
                            </li>

                            <li>
                                <input type="checkbox" name="modalidade_fornecimento[]" value="Almoço" id="refeicao_feita_no_local"/> Almoço 
                            </li>

                            <li>
                                <input type="checkbox" name="modalidade_fornecimento[]" value="Lanche" id="refeicao_feita_no_local"/> Lanche 
                            </li>

                            <li>
                                <input type="checkbox" name="modalidade_fornecimento[]" value="Jantar" id="refeicao_feita_no_local"/> Jantar 
                            </li>

                            <li>
                                <input type="checkbox" name="modalidade_fornecimento[]" value="Ceia" id="refeicao_feita_no_local"/> Ceia 
                            </li>

                        </ul>
                        <img class="proximo" src="<?php bloginfo('template_url') ?>/imgs/btn/btn-proximo-passo.png" width="115" height="29" alt="Btn Proximo Passo">
                    </fieldset>

                    <fieldset id="" class="">
                        <legend>Freqüência diária do Fornecimento</legend>
                        <ul>
                            <li>
                                <input type="radio" name="frequencia" checked="checked"  value="Segunda a Sexta-feira" id="frequencia"/> Segunda a Sexta-feira 
                            </li>

                            <li>
                                <input type="radio" name="frequencia" value="Segunda a Sábado" id="frequencia"/> Segunda a Sábado 
                            </li>

                            <li>
                                <input type="radio" name="frequencia" value="Segunda a Domingo" id="frequencia"/> Segunda a Domingo 
                            </li>

                        </ul>
                        <img class="proximo" src="<?php bloginfo('template_url') ?>/imgs/btn/btn-proximo-passo.png" width="115" height="29" alt="Btn Proximo Passo">
                    </fieldset>

                    <fieldset id="" class="">
                        <legend>Opções de Refeições</legend>
                        <ul>
                            <li>
                                <label>Refeição Operacional</label>
                                <input type="radio" name="refeicao_operacional" value="Porcionda" id="frequencia"/> Porcionda 
                                <input type="radio" name="refeicao_operacional" value="Self-Service" id="frequencia"/> Self-Service                         
                                <input type="radio" name="refeicao_operacional" checked="checked" value="Nenhuma" id="frequencia"/> Nenhuma                         

                            </li>

                            <li>
                                <label>Refeição Administrativa</label>
                                <input type="radio" name="refeicao_administrativa" value="Porcionda" id="frequencia"/> Porcionda 
                                <input type="radio" name="refeicao_administrativa" value="Self-Service" id="frequencia"/> Self-Service                         
                                <input type="radio" name="refeicao_administrativa" checked="checked" value="Nenhuma" id="frequencia"/> Nenhuma                         

                            </li>

                            <li>
                                <label>Refeição Diretoria</label>
                                <input type="radio" name="refeicao_diretoria" value="Porcionda" id="frequencia"/> Porcionda 
                                <input type="radio" name="refeicao_diretoria" value="Self-Service" id="frequencia"/> Self-Service                         
                                <input type="radio" name="refeicao_diretoria" checked="checked" value="Nenhuma" id="frequencia"/> Nenhuma                         

                            </li>                    
                        </ul>
                        <img class="proximo" src="<?php bloginfo('template_url') ?>/imgs/btn/btn-proximo-passo.png" width="115" height="29" alt="Btn Proximo Passo" />
                    </fieldset>
            </form>
    </div>
</div> <!-- fim col-right -->
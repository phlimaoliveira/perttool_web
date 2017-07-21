<div class="col-lg-12" style="background:#f4f4f4; margin-top: 120px;">
    <div class="container" style="background:#f4f4f4">
        <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="ibox">
                        <div class="ibox-content">
                            
                            <div class="text-center article-title" style="margin-bottom:50px;">
                                <h1>
                                    <b>Como posso utilizar as redes PERT/CPM nos meus projetos?</b>
                                </h1>
                            </div>

                            <div class="text-center"><b style="font-size:16pt;">1. Introdução</b><br><br></div>
                            <p>
                                No âmbito do desenvolvimento de software, sabe-se que, em geral, a precisão nos cronogramas é mais importante do que a precisão nos custos [1]. Um argumento a favor dessa afirmação é que custos adicionais podem ser absorvidos por várias vendas; e em alguns casos, pode-se estipular um novo preço. Já o não cumprimento do cronograma pode: (i) reduzir o impacto no mercado; (ii) criar insatisfação dos clientes; e (iii) criar problemas com a integração dos sistemas. Rede PERT-CPM ou Rede de Planejamento é a representação gráfica de um cronograma, na qual se apresenta a sequência lógica e as interdependências entre as tarefas. São utilizadas para sistematizar o processo de elaboração e acompanhamento de cronogramas. Redes PERT-CPM podem ser aplicadas em tudo que se possa imaginar que tenha uma origem e um término previamente fixado. Desde a fabricação de um alfinete até a elaboração de um projeto para colocar um satélite em órbita.

                            </p>

                            <div class="text-center"><br><b style="font-size:16pt;">2. Conceitos teóricos</b><br><br></div>
                            <b>2.1 Conceitos Preliminares</b><br><br>
                            <p>
                                As técnicas denominadas PERT (Program Evaluation and Review Technique) e CPM (Critical Path Method) foram independentemente desenvolvidas para a Gestão e Controle de Projetos em torno de 1950. Porém a grande semelhança entre estas fez com que o termo PERT-CPM fosse utilizado corriqueiramente como apenas uma técnica. As redes PERT-CPM são compostas por (Figura 1):
                            </p>
                            <b>Atividade: </b> é a execução efetiva de uma operação; consome tempo e/ou recursos. Atividades possuem duração e podem estar relacionadas com outras atividades.

                            <br><br>
                            <b>Eventos: </b>correspondem a marcos que caracterizam determinados instantes.


                            <img src="img/figura01.png" alt="dashboard" class="img-responsive" style="margin-top:50px; margin-left: auto;margin-right: auto;">

                            <div class="text-center"><br><b>Figura 1:</b> eventos: 1 e 2; atividade: pintar porta.</div>

                            <br><br>
                            <p>
                                Atividades podem depender umas das outras (Figura 2) ou serem paralelas (Figura 3). Uma atividade B é dependente de uma atividade A se para iniciar B é necessário que A tenha sido concluída. Duas atividades A e B são paralelas se elas podem ser executadas simultaneamente.
                            </p>

                            <img src="img/figura02.png" alt="dashboard" class="img-responsive" style="margin-top:50px; margin-left: auto;margin-right: auto;">
                            
                            <div class="text-center"><br><b>Figura 2:</b> exemplo de atividades dependentes.</div>

                            <img src="img/figura03.png" alt="dashboard" class="img-responsive" style="margin-top:50px; margin-left: auto;margin-right: auto;">
                            
                            <div class="text-center"><br><b>Figura 3:</b> exemplo de atividades paralelas.</div>

                            <br><br>
                            <p>
                                Um tipo especial de atividade que pode aparecer em uma rede PERT-CPM é a atividade fantasma. Uma atividade fantasma não consome tempo, nem recursos e só deve ser utilizadas quando forem realmente necessárias. Casos em que deve ser utilizada: (i) evitar que entre dois eventos sucessivos exista mais do que uma atividade (veja exemplo da Figura 3 - a atividade representada por uma linha pontilhada é a atividade fantasma); (ii) mostrar a independência de uma atividade. Exemplo: Na Figura 4 é possível ver que o uso da atividade fantasma permite que especifiquemos que “2-4” (café com leite) depende de “1-2” e “1-3”; “3-4” (coalhada) depende apenas de “1-3”.
                            </p>

                            <img src="img/figura04.png" alt="dashboard" class="img-responsive" style="margin-top:50px; margin-left: auto;margin-right: auto;">
                            
                            <div class="text-center"><br><b>Figura 4:</b> exemplo de uso da atividade fantasma.</div>

                            <br><br>
                            <p>
                            Um caminho de uma rede é uma rota, seguindo os arcos do INÍCIO ao FIM. O comprimento de um caminho é a soma das durações das atividades sobre esse caminho. O caminho com maior comprimento é o caminho crítico da rede. As atividades sobre este caminho são as atividades críticas (gargalos). O caminho crítico é representado por linha de cor laranja nas redes das figuras anteriores.
                            </p>

                            <b>2.2 Tempo de execução da rede</b><br><br>

                            <p>
                                Para aprendermos a calcular o tempo de execução de uma rede, isto é, o tempo necessário para realização de todas as atividades da rede sem atrasos, precisamos entender os seguintes conceitos: (i) Tempo Cedo; (ii) Tempo Tarde; e (iii) Folga.
                            </p>

                            <b>Tempo Cedo: </b> tempo necessário para que um evento seja atingido, sem atrasos. É calculado pela seguinte expressão: cedo = máximo(cedo anterior + duração).<br><br>

                            <b >Tempo Tarde: </b> tempo limite para a realização do evento para não atrasar o projeto. É calculado pela seguinte expressão: tarde = mínimo(tarde posterior - duração). <br><br>

                            <b>Folga: </b> diferença entre o tempo tarde e o tempo cedo. É calculada pela seguinte expressão: folga = tarde - cedo. <br><br>

                            <p>
                                As informações adicionadas abaixo dos eventos das redes das imagens anteriores descrevem o tempo cedo, o tempo tarde e a folga de cada evento, no seguinte formato: tempo cedo/tempo tarde/folga.
                            </p>

                            <div class="text-center"><br><b style="font-size:16pt;">3. Considerações Finais</b><br><br></div>

                            <p>
                                Algumas considerações importantes sobre a confecção de cronogramas são: (i) estimar o esforço associado à resolução dos problemas e ao custo do desenvolvimento de uma solução é difícil; (ii) adicionar pessoas a um projeto atrasado pode fazer com que ele se atrase ainda mais; o inesperado sempre acontece. Atenção para as “folgas”; e (iii) a definição de bons cronogramas depende da experiência dos gerentes de projeto.
                            </p>

                            <br><b style="font-size:16pt;">Referências</b><br><br>

                            <p>
                                 1. Sommerville, I. "Engenharia de Software", 9a. Edição. Pearson. 554p. 2011.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<!DOCTYPE html>
<html lang="en">

    <?php include('layout/head.inc.php'); ?>

    <body>

        <?php include('layout/header.inc.php'); ?>

    <!-- 
      ===============
   -->
   <!-- contact section -->
    <section class = "contact" id = "contact">
      <div class = "container">
        <div class = "title">
          <h2 class = "white-text wow animate__animated animate__bounceIn animate__slow">Comece a obter resultados reais agora mesmo</h2>
          <!-- <p class = "text">Fale conosco através dos nossos canais</p> -->
        </div>

        <div class = "row wow animate__animated animate__fadeInUp animate__slow">
          <div class = "contact-left">
            <!-- <h2>Deixe sua mensagem</h2> -->
            <form id="contact-form">
              <input type = "text" class = "form-control" name="name" required="required" placeholder="Nome">
              <input type = "email" class = "form-control" name="email" required="required" placeholder="Email">
              <input type = "phone" class = "form-control" name="telefone" required="required" placeholder="Telefone">
              <input type = "text" class = "form-control" name="empresa" required="required" placeholder="Empresa">
              <!-- <input type = "email" class = "form-control" name="email" required="required" placeholder="Email"> -->
              <select class="form-control" name="select" required="required" placeholder="Media de investimento?">
                <option value="valor2" selected>Média mensal de investimento?</option>
                <option>Até R$1.000,00</option>
                <option>R$1.001,00 - R$5.000,00</option>
                <option>$5001,00 - R$10.000,00</option>
                <option>acima de R$10.000,00</option>
              </select>
              <textarea name="message" required="required" placeholder="Mensagem" rows = "6"></textarea>
              <button type = "submit" onclick="sendMail()" class = "submit-btn">Enviar</button>
            </form>
          </div>

          <div class = "contact-right">
            <div>
              <h2>Venha fazer parte do ...</h2>
              <p class = "text">MeediaOnne</p>
            </div>
            <div>
              <h2>Algum texto</h2>
              <p class = "text">MeediaOnneMeediaOnneMeediaOnneMeediaOnne</i></p>
            </div>
            <!-- <div>
              <h2>Email</h2>
              <p class = "text">recepcao@lexassessoria.com</p>
            </div> -->
          </div>
        </div>
      </div>
    </section>

  
    
    <!-- Cards -->

    <section class="main-card">
      <h2 class="card-main-title">Nossos Diferenciais</h2>

      <div class="card-wrap wrap--1 wow animate__animated animate__fadeInUp animate__slow">
        <div class="card-container container--1">
          <p>Equipe especializada em performance dedicada.</p>
        </div>
      </div>

      <div class="card-wrap wrap--2 wow animate__animated animate__fadeInUp animate__slow">
        <div class="card-container container--2">
          <p>Aumento de performance em suas campanhas.</p>
        </div>
      </div>

      <div class="card-wrap wrap--3 wow animate__animated animate__fadeInUp animate__slow">
        <div class="card-container container--3">
          <p>Aumento de ROI e geração de insights.</p>
        </div>
      </div>

    </section>

    <!-- End Cards -->

    <!-- <section class = "contact" id = "contact">
      <div class = "container">
        <div class = "title">
          <h2 class = "wow animate__animated animate__bounceIn animate__slow">Fale com a gente</h2>
          <p class = "text-contact">Fale com a gente</p>
          <div class = "line"></div>
        </div>

        <div class = "row wow animate__animated animate__fadeInUp animate__slow">
          <div class = "contact">
            <h2>Fale com a gente</h2>
            <form id="contact-form">
              <input type = "text" class = "form-control" name="name" required="required" placeholder="Nome">
              <input type = "email" class = "form-control" name="email" required="required" placeholder="Email">
              <textarea name="message" required="required" placeholder="Mensagem" rows = "6"></textarea>
              <button type = "submit" onclick="sendMail()" class = "submit-btn">Quero saber mais</button>
            </form>
          </div>

          <div class = "contact-right">
            <div>
              <h2>Endereço</h2>
              <p class = "text">Avenida São Luis, 112 – 11º andar – conjunto: 1101-B – Ed. Vilma Sônia – São Paulo – SP</p>
            </div>
            <div>
              <h2>Telefone</h2>
              <p class = "text"> (11) 3392-5536 (11) 98819-0339 <i class="whats-contact fa fa-whatsapp my-float"></i></p>
            </div>
            <div>
              <h2>Email</h2>
              <p class = "text">recepcao@lexassessoria.com</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Contact session -->

    
    
    <!-- Especialidades section -->
    <section class = "feature" id = "expertise">
      <div class = "container">
        <div class = "row">
          <div class = "feature-left wow animate__animated animate__fadeInUp animate__slow">
            <img src = "assets/pc-mockup.png" alt = "">
          </div>
          <div class = "feature-right wow animate__animated animate__fadeInUp animate__slow">
            <div class = "title-dores">
              <h2>Quais dores nós resolvemos?</h2>
            </div>

            <div class = "feature-item">
              <!-- <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span> -->
              <!-- <div>
                <h3>Direito Trabalhista</h3>
              </div> -->
              <div class = "row wow animate__animated animate__fadeInUp animate__slow">
                <div class = "expertise-item">
                  <div class = "expertise-head">
                    <h3>Redes e Canais</h3>
                    <span><i class = "fa fa-chevron-down"></i></span>
                  </div>
                  <div class = "expertise-content">
                    <p class = "text">Muitos canais, contas e campanhas para gerenciar manualmente. </p>
                    <!-- <p class = "text">Horas extras;</p>
                    <p class = "text">Salários atrasados ou não pagos integralmente;</p>
                    <p class = "text">Pactos não cumpridos;</p>
                    <p class = "text">Adicionais de insalubridade e periculosidade;</p>
                    <p class = "text">Horário de almoço não concedido;</p>
                    <p class = "text"> E muito mais!</p> -->
                  </div>
                </div>
              </div>
            </div>

            <div class = "feature-item">
              <div class = "row wow animate__animated animate__fadeInUp animate__slow">
                <div class = "expertise-item">
                  <div class = "expertise-head">
                    <h3>Dashboards Customizados</h3>
                    <span><i class = "fa fa-chevron-down"></i></span>
                  </div>
                  <div class = "expertise-content">
                    <p class = "text">Extrair relatórios de diversas fontes de dados para compor uma visão de resultados consolidados através de um Dashboard customizado.</p>
                    <!-- <p class = "text">Inscrições indevidas no SERASA/SPC;</p>
                    <p class = "text">Juros abusivos em contratos bancários;</p>
                    <p class = "text">Propaganda enganosa ou abusiva;</p>
                    <p class = "text">Problemas em compras feitas pela Internet;</p>
                    <p class = "text">Produtos não entregues ou serviços não prestados;</p>
                    <p class = "text">Contratos de planos de saúde;</p>
                    <p class = "text">Extravio de bagagens... Entre outros!</p> -->
                  </div>
                </div>
              </div>
            </div>
            
            <div class = "feature-item">
              <div class = "row wow animate__animated animate__fadeInUp animate__slow">
                <div class = "expertise-item">
                  <div class = "expertise-head">
                    <h3>Estratégia de negócios</h3>
                    <span><i class = "fa fa-chevron-down"></i></span>
                  </div>
                  <div class = "expertise-content">
                    <p class = "text">Dificuldades de identificar insights que auxiliem nas estratégias e tomadas de decisão.</p>
                    <!-- <p class = "text">Inscrições indevidas no SERASA/SPC;</p>
                    <p class = "text">Juros abusivos em contratos bancários;</p>
                    <p class = "text">Propaganda enganosa ou abusiva;</p>
                    <p class = "text">Problemas em compras feitas pela Internet;</p>
                    <p class = "text">Produtos não entregues ou serviços não prestados;</p>
                    <p class = "text">Contratos de planos de saúde;</p>
                    <p class = "text">Extravio de bagagens... Entre outros!</p> -->
                  </div>
                </div>
              </div>
            </div>  

            <div class = "feature-item">
              <div class = "row wow animate__animated animate__fadeInUp animate__slow">
                <div class = "expertise-item">
                  <div class = "expertise-head">
                    <h3>Redução de custos</h3>
                    <span><i class = "fa fa-chevron-down"></i></span>
                  </div>
                  <div class = "expertise-content">
                    <p class = "text">Custo Operacional Alto. Dificuldade de escalar o negócio devido ao alto custo de contratação de mão de obra qualificada.</p>
                    <!-- <p class = "text">Inadimplemento de aluguel;</p>
                    <p class = "text">Cobrança de honorários profissionais;</p>
                    <p class = "text">Ações de despejo;</p>
                    <p class = "text">Entre outros!</p> -->
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- end of features section -->

    <!-- Missão section -->
    <section class = "mission" id="mission">
      <div class = "container">
        <h2 class = "wow animate__animated animate__fadeInUp animate__slow">Sobre a MeediaOnne</h2>
        <div class = "line"></div>
        <!-- <p class = "wow animate__animated animate__fadeInUp animate__slow">Prover serviços jurídicos de qualidade, a fim de auxiliar os clientes a alcançarem seus objetivos de forma eficaz e inovadora, por meio de advogados e colaboradores qualificados, valorizados e dedicados a preservar a credibilidade construída no mais de 20 anos de atuação do escritório. </p> -->
            <p class = "text">Somos uma ADTech de inteligência em performance , protagonista na transformação do mercado Brasileiro de publicidade para um padrão automatizado, descentralizado, simples e acessível.</p>
            <p class = "text">Desenvolvemos um modelo de negócio para profissionais que querem empreender na área do marketing digital, tendo um negócio inovador, acessível, lucrativo e totalmente escalável. E o melhor, com baixo investimento.</p>
            <p class = "text">Um modelo capaz de acelerar os negócios de pequenos e médios empreendedores.</p>

      </div>
    </section>
    <!-- end of Missão section -->

    
    <!-- Proposal section -->
    <section class = "proposal" id="proposal">
      <div class = "container">
        <div class = "title">
          <h2 class = "wow animate__animated animate__bounceIn animate__slow faq">Perguntas Mais Frequentes</h2>
          <p class = "text">Tem alguma outra dúvida? Entre em contato com a gente, nós temos a resposta certa para você.</p>
          <!-- <p class = "text">Veja mais abaixo</p> -->
        </div>

        <div class = "row wow animate__animated animate__fadeInUp animate__slow">
            <div class = "proposal-item">
              <div class = "proposal-head">
                <h3>Por que escolher a MeediaOnne?</h3>
                <span><i class = "fas fa-plus"></i></span>
              </div>
              <div class = "proposal-content">
                <p class = "text">A MeediaOnne nasceu para democratizar a gestão de campanhas digitais, unindo inteligência de performance a dados e tecnologia. Através de metodologia, equipe de especialistas e plataforma potente, queremos te ajudar a investir com qualidade e escalar o negócio.</p>
              </div>
            </div>

          <div class = "proposal-item">
            <div class = "proposal-head">
              <h3>Preciso cadastrar meu cartão de crédito no teste?</h3>
              <span><i class = "fas fa-plus"></i></span>
            </div>
            <div class = "proposal-content">
              <p class = "text">Não precisa cadastrar o cartão de crédito ou pagar qualquer valor adicional ao budget investido em mídia durante o período de teste.</p>
              <!-- <p class = "text">Atendimento na hora por especialistas;</p>
              <p class = "text">Reuniões presenciais;</p>
              <p class = "text">Esclarecimento de dúvidas jurídicas, com enfoque nas áreas trabalhistas e cíveis;</p>
              <p class = "text">Negociações extrajudiciais;</p> -->
            </div>
          </div>
          <div class = "proposal-item">
            <div class = "proposal-head">
              <h3>Existe algum treinamento para uso da plataforma?</h3>
              <span><i class = "fas fa-plus"></i></span>
            </div>
            <div class = "proposal-content">
              <p class = "text">A MeediaOnne nasceu para democratizar a gestão de campanhas digitais, unindo inteligência de performance a dados e tecnologia. Através de metodologia, equipe de especialistas e plataforma potente.</p>
              <!-- <p class = "text">Atendimento na hora por especialistas;</p>
              <p class = "text">Reuniões presenciais;</p>
              <p class = "text">Esclarecimento de dúvidas jurídicas, com enfoque nas áreas trabalhistas e cíveis;</p>
              <p class = "text">Negociações extrajudiciais;</p> -->
            </div>
          </div>
          <div class = "proposal-item">
            <div class = "proposal-head">
              <h3>Existe algum contrato ou período de fidelização?</h3>
              <span><i class = "fas fa-plus"></i></span>
            </div>
            <div class = "proposal-content">
              <p class = "text">Não, não temos fidelização e nem multa para cancelamento. Queremos que você continue com a MeediaOnne pela excelência da nossa entrega e plataforma e não por tempo de contrato. </p>
              <!-- <p class = "text">Atendimento na hora por especialistas;</p>
              <p class = "text">Reuniões presenciais;</p>
              <p class = "text">Esclarecimento de dúvidas jurídicas, com enfoque nas áreas trabalhistas e cíveis;</p>
              <p class = "text">Negociações extrajudiciais;</p> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of faq section -->

    <!-- contact section -->
    <!-- <section class = "contact" id = "contact">
      <div class = "container">
        <div class = "title">
          <h2 class = "wow animate__animated animate__bounceIn animate__slow">Contato</h2>
          <p class = "text">Fale conosco através dos nossos canais</p>
        </div>

        <div class = "row wow animate__animated animate__fadeInUp animate__slow">
          <div class = "contact-left">
            <h2>Deixe sua mensagem</h2>
            <form id="contact-form">
              <input type = "text" class = "form-control" name="name" required="required" placeholder="Nome">
              <input type = "email" class = "form-control" name="email" required="required" placeholder="Email">
              <textarea name="message" required="required" placeholder="Mensagem" rows = "6"></textarea>
              <button type = "submit" onclick="sendMail()" class = "submit-btn">Enviar</button>
            </form>
          </div>

          <div class = "contact-right">
            <div>
              <h2>Endereço</h2>
              <p class = "text">Avenida São Luis, 112 – 11º andar – conjunto: 1101-B – Ed. Vilma Sônia – São Paulo – SP</p>
            </div>
            <div>
              <h2>Telefone</h2>
              <p class = "text"> (11) 3392-5536 (11) 98819-0339 <i class="whats-contact fa fa-whatsapp my-float"></i></p>
            </div>
            <div>
              <h2>Email</h2>
              <p class = "text">recepcao@lexassessoria.com</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

        <?php include('layout/footer.inc.php'); ?>
        
        <?php include('layout/scripts.inc.php'); ?>

    </body>
</html>
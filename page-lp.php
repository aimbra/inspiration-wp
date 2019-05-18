<?php

/**
 * Template Name: Landing Page Template
 * Author: Thiago Cunha
 */
?>

<?php get_header(); ?>
<main>
  <?php
  if (have_posts()):
    while(have_posts()): the_post();?>
    <!-- <article>
    <?php the_content(); ?>
    </article> -->

    <header style="background-image: url(<?= get_template_directory_uri().'/dist/images/bg-header.png'; ?>);">
    <section>
      <div class="d-flex justify-content-center">
        <figure class="logo">
          <img src="<?= get_template_directory_uri().'/dist/images/logo-altmakelightr.svg'; ?>" alt="Logotipo Aimbra">
        </figure>
      </div>
    </section>
    <section class="content">
      <div class="text-center" data-toggle="modal" data-target=".bd-example-modal-xl">
        <i class="far fa-play-circle"></i>
      </div>
      <div class="text-center mt-5">
        <h1 class="text-uppercase">Faça Parte do Único clube do Brasil especializado em <span>Persuasão</span> e <span>Copywriting</span></h1>
        <h5 class="text-uppercase">Temporada 2</h5>
      </div>
      <div class="text-center p-5">
        <h4 class="text-uppercase">Faça sua assinatura agora!</h4>
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <button class="btn btn-secondary w-100 m-2">Plano semestral por R$594,00</button>
          </div>
          <div class="col-xs-12 col-md-6">
            <button class="btn btn-danger w-100 m-2">Plano anual por R$899,00</button>
          </div>
        </div>
      </div>
      <div class="container descriptions">
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <div class="title-card text-center">
              <i class="far fa-file-alt"></i>
              <h4>100% Exclusivo</h4>
              <p>Aulas e materiais originais criados exclusivamente para os membros do clube.</p>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div class="title-card text-center">
              <i class="fas fa-flask"></i>
              <h4>100% prático</h4>
              <p>Ensino prático sem rodeios para você evoluir e faturar mais com copy.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>
  <main>
    <section class="container teachers">
      <div class="text-center">
        <figure>
          <img class="img-fluid" src="<?= get_template_directory_uri(). '/dist/images/professores.png'; ?>" alt="Foto com os professores">
        </figure>
      </div>
      <div class="text-center">
        <h2>Seremos os seus mestres</h2>
        <p>Paulo Maccedo e Fred Ribas dedicaram parte da vida pesquisando e produzindo comunicações que influenciam pessoas e geram receita.  Agora eles se juntam para ensinar suas abordagens e conceitos sobre persuasão e copywriting. Aprenda a encontrar sua promessa única, desenvolver grandes ideias e garantir lucros diretamente para o seu bolso. Descubra todo o poder da escrita persuasiva e pegue as chaves que abrirão as portas dos resultados.</p>
      </div>
    </section>
    <section class="how-it-works" style="background-image: url(<?= get_template_directory_uri().'/dist/images/bg-1.png'; ?>);">
      <div class="container">
        <div class="row">
          
          <div class="col-12 text-center p-5">
            <h2>Como funciona?</h2>
            <p>Você tem acesso a materiais práticos avançados sobre persuasão e copywriting e recebe orientação de modo inspirador para avançar em seus resultados.</p>
          </div>

          <div class="col-xs-12 col-md-4">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">
                  Aulas regulares quinzenais
                </h3>
                <ul class="list-group">
                  <li>Aulas ao vivo ministradas pelos dois orientadores</li>
                  <li>Estratégias de persuasão e copywriting destrinchadas</li>
                  <li>Conceitos usados por grandes mestres dos negócios em detalhes</li>
                </ul>
              </div>
            </div>
          </div>


          <div class="col-xs-12 col-md-4">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">
                  Área de membros exclusiva
                </h3>
                <ul class="list-group list-group-flush">
                  <li>Plataforma prática de fácil acesso</li>
                  <li>Toda aula fica gravada e disponível aos membros</li>
                  <li>Você tem acesso irrestrito a todo material produzido no clube em cada temporada</li>
                </ul>
              </div>
            </div>
          </div>


          <div class="col-xs-12 col-md-4">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">
                  Materiais complementares
                </h3>
                <ul class="list-group">
                  <li>E-books, PDF’s, métodos para usar e testar</li>
                  <li>Estudos pessoais dos orientadores revelados</li>
                  <li style="letter-spacing: -0.5px;">Materiais avançados de persuasão e copywriting não encontrados em nenhum outro lugar</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="faq">
      <div class="container text-center p-5">
        <h2>Resumo da temporada #2</h2>
        <p>São 17 episódios onde vamos pegar desdes as raízes da arte de pensar e escrever para influenciar pessoas, passando pelos estudos da mente e comportamento do consumidor e chegando às estruturas práticas para você colocar a mão na massa. Você vai aprender com detalhes como pensar em estratégias que atraem, geram interesse e levam pessoas à ação.</p>
      </div>
      <div class="container text-center p-5">
        <h2>Para quem é o ALTMaker PRO</h2>
        <p>Homens e mulheres de negócios, profissionais criativos, influenciadores, vendedores, infoprodutores e todo especialista comprometido que usa ou pretende usar a internet para oferecer serviços, ideias ou produtos.</p>
      </div>
      <div class="container text-center p-5">
        <h2>Para quem <span>não</span> é o ALTMaker PRO</h2>
        <p>Para curiosos, pessoas que buscam templates e fórmulas mágicas, preguiçosos que querem ter sucesso sem esforço, fãs incondicionais de falsos gurus e empreendedores de palco.</p>
      </div>
    </section>

    <section class="testemony" style="background-image: url(<?= get_template_directory_uri().'/dist/images/bg-2.png'; ?>);">
      <div class="container">
        <div class="row">
          <div class="col-12 p-5">
            <h2 class="text-center">O que os membros tem a dizer</h2>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="card-title">
                  Depoimento
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam odit officia, voluptates dolorum labore corrupti ipsa dicta earum consequatur vitae, aut totam ex necessitatibus! Aliquid maiores earum obcaecati ad magni?</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="card-title">
                  Depoimento
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus repudiandae numquam eligendi dolor nisi recusandae quia, vero ad veniam itaque eum vel architecto reprehenderit dolore, sit quasi, sint id laboriosam!</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="card-title">
                  Depoimento
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum expedita deserunt deleniti molestias alias quas ipsam, distinctio ducimus, laborum harum vel consequuntur earum quisquam, eveniet dolor ea amet ipsum! Hic?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="price desktop-show">
      <div class="container">
        <div class="card mt-5">
          <div class="card-body p-5">
            <table class="table table-hover table-responsive-sm">
              <thead>
                <tr>
                  <th>-</th>
                  <th class="text-center">Plano Semestral</th>
                  <th class="text-center">Plano Anual</th>
                </tr>
              </thead>
              <tbody class="w-100">
                <tr>
                  <td>Acesso mensal a todo material na área de membros no clube</td>
                  <td class="text-center"><i class="fas fa-check"></i></td>
                  <td class="text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td>Ingresso a todos os encontros quinzenais</td>
                  <td class="text-center"><i class="fas fa-check"></i></td>
                  <td class="text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td>Orientação direta com Paulo Maccedo e Fred Ribas</td>
                  <td class="text-center"><i class="fas fa-check"></i></td>
                  <td class="text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td>Acesso irrestrito ao clube por 12 meses</td>
                  <td class="text-center"><i class="fas fa-times"></i></td>
                  <td class="text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td>Cartão vip que dá direito a descontos e vantagens</td>
                  <td class="text-center"><i class="fas fa-times"></i></td>
                  <td class="text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td>2 brindes exclusivos do clube (caneca e livro) </td>
                  <td class="text-center"><i class="fas fa-times"></i></td>
                  <td class="text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td>30% de desconto em produtos e eventos lançados pelos mentores</td>
                  <td class="text-center"><i class="fas fa-times"></i></td>
                  <td class="text-center"><i class="fas fa-check"></i></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td></td>
                  <td><button class="btn btn-secondary btn-sm w-100">Sim, quero este!</button></td>
                  <td><button class="btn btn-danger btn-sm w-100">Sim, quero este!</button></td>
                </tr>
                <tr>
                  <td></td>
                  <td class="price">R$594,00</td>
                  <td class="price">R$899,00</td>
                </tr>
              </tfoot>
            </table>
          </div>
          
        </div>
      </div>
    </section>

    <section class="price mobile-show">
        <div class="container">
          <div class="row p-4">
            <div class="col-12">
              <div class="card mt-5">
                <div class="card-body p-5">
                  <h3 class="card-title text-center">Plano Semestral</h3>
                  <h4 class="text-center">R$594,00</h4>
                  <ul class="list-group">
                    <li class="list-item">Acesso mensal a todo material na área de membros no clube</li>
                    <li class="list-item">Ingresso a todos os encontros quinzenais</li>
                    <li class="list-item">Orientação direta com Paulo Maccedo e Fred Ribas</li>
                  </ul>
                  <button class="btn btn-secondary w-100">Eu quero este!</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row p-4">
            <div class="col-12">
              <div class="card mt-5">
                <div class="card-body p-5">
                  <h3 class="card-title text-center">Plano anual</h3>
                  <h4 class="text-center">R$594,00</h4>
                  <ul class="list-group">
                    <li class="list-item">Acesso mensal a todo material na área de membros no clube</li>
                    <li class="list-item">Ingresso a todos os encontros quinzenais</li>
                    <li class="list-item">Orientação direta com Paulo Maccedo e Fred Ribas</li>
                    <li class="list-item">Acesso irrestrito ao clube por 12 meses</li>
                    <li class="list-item">Cartão vip que dá direito a descontos e vantagens </li>
                    <li class="list-item">2 brindes exclusivos do clube (caneca e livro) </li>
                    <li class="list-item">30% de desconto em produtos e eventos lançados pelos mentores</li>
                  </ul>
                  <button class="btn btn-danger w-100">Eu quero este!</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


  </main>
  
  <?php
    endwhile;
  else:
    ?>
  <article>
    <p class="alert alert-danger">Nenhum conteúdo a ser mostrado</p>
  </article>
  <?php
  endif;
  ?>
</main>
<?php get_footer(); ?>
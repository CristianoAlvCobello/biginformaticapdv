<?php   
    $arquivo = basename(__FILE__);
    $descricao = "Big Informática em São Roque/SP: soluções completas em tecnologia da informação, assistência técnica para computadores, sistemas de gestão, backup profissional e suporte técnico especializado.";
    include 'includes/header.php';
?>

<!-- Hero banner -->
<section class="relative bg-gray-100 overflow-hidden" id="inicio">
  <!-- círculo vermelho -->
  <div class="absolute top-0 right-0 w-[900px] h-[900px] bg-red-600 rounded-full translate-x-1/3 -translate-y-1/4 z-0 hidden lg:block"></div>

  <div class="relative max-w-7xl mx-auto px-6 py-24">
    <div class="flex flex-col lg:flex-row items-center gap-12">

      <!-- Texto -->
      <div class="lg:w-1/2 text-center lg:text-left">

        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
          Controle suas vendas e
          emita NFC-e de forma
          <span class="text-red-600">rápida e fácil.</span>
        </h1>

        <p class="mt-6 text-lg text-gray-600 max-w-xl mx-auto lg:mx-0">
          Otimizado para micro e pequenas empresas, MEI e Simples dos
          segmentos do varejo a bares e restaurantes.
        </p>

        <!-- Botões -->
        <div class="flex flex-wrap justify-center lg:justify-start gap-4 mt-8">
          <a href="https://play.google.com/store/apps/details?id=br.com.desenvolvedorpdv.pdvmais" target="_blank"><img src="images/img-down-android.svg" class="h-12 hover:scale-105 transition"></a>
          <a href="https://apps.apple.com/br/app/pdv/id6443721199" target="_blank"><img src="images/img-down-ios.svg" class="h-12 hover:scale-105 transition"></a>
          <a href="https://'navi'vendas.com.br/download/windows/pdvmais"><img src="images/img-down-windows.svg" class="h-12 hover:scale-105 transition hidden lg:block"></a>
        </div>
      </div>

      <!-- IMAGEM ÚNICA -->
      <div class="lg:w-1/2 relative flex justify-center lg:justify-end">
        <img src="images/img-banner.webp" class="relative z-10 max-w-full w-[800px] object-contain drop-shadow-2xl">
      </div>
    </div>
  </div>
</section>

<!-- Grid de soluções -->
<section class="py-20 scroll-mt-24" id="recursos">
  <div class="max-w-7xl mx-auto px-6">
    <!-- Título -->
    <h2 class="text-center text-3xl md:text-4xl font-bold text-gray-900 mb-16">
      Solução inteligente para seu negócio.
    </h2>

    <!-- Grid -->
    <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-3">

      <!-- Item -->
      <div class="text-center lg:text-left">
        <div class="flex justify-center lg:justify-start mb-6">
          <div class="w-20 h-20 flex items-center justify-center bg-red-600 rounded-full shadow-md">
            <img src="images/wifi-off.svg" class="w-8">
          </div>
        </div>

        <h3 class="text-xl font-bold text-gray-900 mb-3">
          Venda offline
        </h3>

        <p class="text-gray-700">
          <strong>Não perca vendas</strong> se sua internet cair. 
          Com o <strong>gerenciamento de notas pendentes</strong> é possível emitir 
          <strong>NFC-e em contingência</strong> e transmiti-las quando restabelecer a conexão.
        </p>
      </div>

      <!-- Item -->
      <div class="text-center lg:text-left">
        <div class="flex justify-center lg:justify-start mb-6">
          <div class="w-20 h-20 flex items-center justify-center bg-red-600 rounded-full shadow-md">
            <img src="images/multiplataforma.svg" class="w-8">
          </div>
        </div>

        <h3 class="text-xl font-bold text-gray-900 mb-3">
          Multiplataforma
        </h3>

        <p class="text-gray-700">
          Use o Big Informática PDV em <strong>Computadores com Windows</strong>, 
          <strong>tablets, maquininhas smart, mini PDV</strong> e 
          <strong>smartphones Android e iOS</strong>.
        </p>
      </div>

      <!-- Item -->
      <div class="text-center lg:text-left">
        <div class="flex justify-center lg:justify-start mb-6">
          <div class="w-20 h-20 flex items-center justify-center bg-red-600 rounded-full shadow-md">
            <img src="images/ponto-de-venda.svg" class="w-8">
          </div>
        </div>

        <h3 class="text-xl font-bold text-gray-900 mb-3">
          PDV compacto
        </h3>

        <p class="text-gray-700">
          Conecte equipamentos com <strong>conexão USB ou bluetooth</strong> 
          como <strong>leitores de código de barra, impressoras, teclados e gavetas de dinheiro</strong>.
        </p>
      </div>

      <!-- Item -->
      <div class="text-center lg:text-left">
        <div class="flex justify-center lg:justify-start mb-6">
          <div class="w-20 h-20 flex items-center justify-center bg-red-600 rounded-full shadow-md">
            <img src="images/banco-online.svg" class="w-8">
          </div>
        </div>

        <h3 class="text-xl font-bold text-gray-900 mb-3">
          Banco online de produtos
        </h3>

        <p class="text-gray-700">
          Usando o código de barras no <strong>cadastro automático de produtos</strong> 
          você tem acesso ao nosso <strong>banco online</strong> com 
          <strong>descrição, tributação e foto</strong>.
        </p>
      </div>

      <!-- Item -->
      <div class="text-center lg:text-left">
        <div class="flex justify-center lg:justify-start mb-6">
          <div class="w-20 h-20 flex items-center justify-center bg-red-600 rounded-full shadow-md">
            <img src="images/nuvem.svg" class="w-8">
          </div>
        </div>

        <h3 class="text-xl font-bold text-gray-900 mb-3">
          Armazenamento em nuvem
        </h3>

        <p class="text-gray-700">
          Você pode <strong>sincronizar</strong> o Big Informática PDV em todos os seus dispositivos 
          usando um <strong>único banco de dados na nuvem</strong>.
        </p>
      </div>

      <!-- Item -->
      <div class="text-center lg:text-left">
        <div class="flex justify-center lg:justify-start mb-6">
          <div class="w-20 h-20 flex items-center justify-center bg-red-600 rounded-full shadow-md">
            <img src="images/balanca.svg" class="w-8">
          </div>
        </div>

        <h3 class="text-xl font-bold text-gray-900 mb-3">
          Balança
        </h3>

        <p class="text-gray-700">
          Integre <strong>balanças de checkout</strong> ao sistema e tenha 
          as pesagens adicionadas diretamente ao PDV.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Catálogo Online -->
<section class="bg-gray-100 py-24 scroll-mt-24" id="catalogo"> 
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Texto -->
      <div data-aos="fade-down">
        <h2 class="text-5xl font-bold text-gray-900 mb-6">
          Catálogo Online
        </h2>

        <p class="text-lg text-gray-700 mb-4">
          Transforme sua loja física em uma <strong>loja digital personalizada.</strong>
        </p>

        <p class="text-lg text-gray-700 mb-4">
          O <strong>Catálogo Online</strong> é uma página e também um aplicativo para
          divulgação e venda de produtos.
        </p>

        <p class="text-lg text-gray-700 mb-4">
          Permita pagamentos por cartão de crédito e Pix diretamente do Catálogo
          Online. Escolha também as formas de pagamento disponíveis para o
          cliente na entrega e retirada.
        </p>

        <p class="text-lg text-gray-700 mb-4">
          Cadastrando os produtos no Big Informática PDV é possível
          <strong>escolher quais ficarão disponíveis</strong> para seus clientes no
          Catálogo.
        </p>

        <p class="text-lg text-gray-700 mb-4">
          Os pedidos feitos são recebidos
          <strong>automaticamente no módulo Delivery da Big Informática</strong>,
          e você ainda tem a opção de deixar seu WhatsApp para recebê-los por
          mensagem e contatar o cliente.
        </p>

        <p class="text-gray-700">
          Veja uma <a href="https://biginformaticasr.comercio.net.br/#/catalogo" target="_blank" class="text-orange-500 font-medium hover:underline">loja modelo.</a>
        </p>
      </div>
      
      <!-- Imagem -->
      <div class="flex justify-center lg:justify-end" data-aos="fade-down">
        <img  src="images/catalogo.webp" class="max-w-full h-auto drop-shadow-xl">
      </div>
    </div>
  </div>
</section>

<!-- Menu digital -->
<section class="bg-gray-100 py-10">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Imagem -->
      <div class="flex justify-center lg:justify-end order-2 lg:order-1" data-aos="fade-down">
        <img  src="images/menu-digital.webp" class="max-w-full h-auto drop-shadow-xl">
      </div>

      <!-- Texto -->
      <div class="order-1 lg:order-2" data-aos="fade-down">

        <h2 class="text-5xl font-bold text-gray-900 mb-6">
          Menu Digital
        </h2>

        <p class="text-lg text-gray-700 mb-4">
          Tenha seus produtos sempre atualizados para o cliente com o <strong>Menu Digital</strong>. Através dele, seus clientes podem visualizar seu cardápio, assim como realizar pedidos dentro do seu estabelecimento através de um QR Code na mesa ou na comanda.
        </p>

        <p class="text-lg text-gray-700 mb-4">
          A página é <strong>personalizada</strong>  junto ao Catálogo Online e <strong>você escolhe quais produtos ficam disponíveis</strong>.
        </p>

        <p class="text-gray-700">
          Veja um <a href="https://biginformaticasr.menudigital.net.br/#/catalogo" target="_blank" class="text-orange-500 font-medium hover:underline">menu exemplo.</a>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Monitor de cozinha -->
<section class="bg-gray-100 py-24 scroll-mt-24">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Texto -->
      <div data-aos="fade-down">
        <h2 class="text-5xl font-bold text-gray-900 mb-6">
          Monitor de Cozinha
        </h2>

        <p class="text-lg text-gray-700 mb-4">
          Gerencie o preparo dos pedidos na cozinha, tudo de forma digital.
        </p>

        <p class="text-lg text-gray-700 mb-4">
          Com o aplicativo <strong>Monitor de Cozinha</strong>, você recebe e faz a gestão do preparo dos pedidos realizados nos <strong>módulos Delivery</strong> e <strong>Atendimento</strong>, tendo uma visualização dos status do andamento que ajuda a orientar a equipe da cozinha. Na tela são mostradas as informações de cada item dos pedidos, contendo descrição, imagem, ingredientes, modo de preparo e observações.
        </p>

        <p class="text-lg text-gray-700">
          Este é um aplicativo auxiliar que funciona em conjunto com o Big Informática PDV e pode ser instalado em computadores Windows, tablets Android e iPad.
        </p>
      </div>
      
      <!-- Imagem -->
      <div class="flex justify-center lg:justify-end" data-aos="fade-down">
        <img  src="images/monitor-cozinha.webp" class="max-w-full h-auto drop-shadow-xl">
      </div>
    </div>
  </div>
</section>

<!-- Pesagem automatica -->
<section class="bg-gray-100 py-10">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Imagem -->
      <div class="flex justify-center lg:justify-end order-2 lg:order-1" data-aos="fade-down">
        <img  src="images/pesagem-automatica.webp" class="max-w-full h-auto drop-shadow-xl">
      </div>

      <!-- Texto -->
      <div class="order-1 lg:order-2" data-aos="fade-down">

        <h2 class="text-5xl font-bold text-gray-900 mb-6">
          Pesagem Automática
        </h2>

        <p class="text-lg text-gray-700 mb-4">
          Automatize a pesagem dos pratos em seu restaurante de buffet.
        </p>

        <p class="text-lg text-gray-700 mb-4">
         Com o aplicativo <strong>Pesagem Automática</strong> seus clientes fazem a pesagem e pegam a comanda sozinhos, apenas seguindo as instruções apresentadas na tela, evitando a necessidade de um funcionário dedicado à balança. Em virtude da integração, o consumo pode ser enviado automaticamente para o Big Informática PDV.
        </p>

        <p class="text-lg text-gray-700 mb-4">
          Conecte equipamentos como balança, leitor e impressora conforme o modo de trabalho do estabelecimento. Imprima comandas ou utilize um leitor de código de barras para as comandas reutilizáveis.
        </p>

        <p class="text-lg text-gray-700">
          Conecte equipamentos como balança, leitor e impressora conforme o modo de trabalho do estabelecimento. Imprima comandas ou utilize um leitor de código de barras para as comandas reutilizáveis.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Consulta Preço -->
<section class="bg-gray-100 py-24 scroll-mt-24">
  <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Texto -->
        <div data-aos="fade-down">
          <h2 class="text-5xl font-bold text-gray-900 mb-6">
            Consulta Preço
          </h2>

          <p class="text-lg text-gray-700 mb-4">
            O Consulta Preço é um aplicativo onde o cliente visualiza informações atualizadas dos produtos através de terminais espalhados pelo estabelecimento.
          </p>

          <p class="text-lg text-gray-700 mb-4">
            Ao identificar o código de barras na embalagem, o app mostra preço, foto e descrição do produto conforme cadastrados no sistema ERP.
          </p>

          <p class="text-lg text-gray-700 mb-4">
            Disponível para Windows, Android (tablets e terminais de consulta) e iPadOS.
          </p>

          <p class="text-lg text-gray-700 mb-4">
            Deve ser combinado com um leitor de código de barras.
          </p>

          <p class="text-lg text-gray-700">
            Este é um aplicativo auxiliar que funciona em conjunto com o Big Informática PDV.
          </p>
        </div>
        
        <!-- Imagem -->
        <div class="flex justify-center lg:justify-end" data-aos="fade-down">
          <img  src="images/consulta-preco.webp" class="max-w-full h-auto drop-shadow-xl">
        </div>
      </div>
    </div>
  </section>

<!-- Maquininhas -->
<section class="py-24 scroll-mt-24" id="maquininhas">
  <div class="max-w-7xl mx-auto px-6">

    <!-- título -->
    <h2 class="text-center text-3xl font-bold text-gray-900 mb-12">
      Disponível nas principais maquininhas
    </h2>

    <!-- LOGOS -->
    <div id="machineLogos" class="flex flex-wrap justify-center items-center gap-8 md:gap-10 mb-16">

      <img data-index="0" src="images/logo-azulzinha.svg"
      class="machine-logo h-6 md:h-7 opacity-10 hover:opacity-100 hover:scale-110 transition cursor-pointer">

      <img data-index="1" src="images/logo-bin.svg"
      class="machine-logo h-6 md:h-7 opacity-10 hover:opacity-100 hover:scale-110 transition cursor-pointer">

      <img data-index="2" src="images/logo-cielo.svg"
      class="machine-logo h-6 md:h-7 opacity-10 hover:opacity-100 hover:scale-110 transition cursor-pointer">

      <img data-index="3" src="images/logo-getnet.svg"
      class="machine-logo h-6 md:h-7 opacity-10 hover:opacity-100 hover:scale-110 transition cursor-pointer">

      <img data-index="4" src="images/logo-pagbank.svg"
      class="machine-logo h-6 md:h-7 opacity-10 hover:opacity-100 hover:scale-110 transition cursor-pointer">

      <img data-index="5" src="images/logo-rede.svg"
      class="machine-logo h-6 md:h-7 opacity-10 hover:opacity-100 hover:scale-110 transition cursor-pointer">

      <img data-index="6" src="images/logo-safrapay.svg"
      class="machine-logo h-6 md:h-7 opacity-10 hover:opacity-100 hover:scale-110 transition cursor-pointer">

      <img data-index="7" src="images/logo-sicredi.svg"
      class="machine-logo h-6 md:h-7 opacity-10 hover:opacity-100 hover:scale-110 transition cursor-pointer">

      <img data-index="8" src="images/logo-stone.svg"
      class="machine-logo h-6 md:h-7 opacity-10 hover:opacity-100 hover:scale-110 transition cursor-pointer">

      <img data-index="9" src="images/logo-vero.svg"
      class="machine-logo h-6 md:h-7 opacity-10 hover:opacity-100 hover:scale-110 transition cursor-pointer">

    </div>

    <!-- CARROSSEL -->
    <div class="relative flex items-center justify-center">

      <!-- seta esquerda -->
      <button id="prev"
      class="absolute left-2 md:left-0 text-3xl text-gray-400 hover:text-black transition cursor-pointer">
      ❮
      </button>

      <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-20 text-center lg:text-left">

        <!-- imagem -->
        <img id="machineImage"
        class="h-[260px] sm:h-[320px] lg:h-[420px] drop-shadow-xl transition-all duration-500 ease-in-out">

        <!-- texto -->
        <div id="machineText"
        class="transition-all duration-500 ease-in-out"></div>

      </div>

      <!-- seta direita -->
      <button id="next"
      class="absolute right-2 md:right-0 text-3xl text-gray-400 hover:text-black transition cursor-pointer">
      ❯
      </button>

    </div>

  </div>
</section>

<!-- Emissão de NFC-e -->
<section class="bg-gray-100 py-24 scroll-mt-24"> 
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Texto -->
      <div data-aos="fade-down">
        <h2 class="text-5xl font-bold text-gray-900 mb-6">
          Emissão de NFC-e
        </h2>

        <p class="text-lg text-gray-700 mb-4">
        Criando a conta com seu CNPJ, você pode adicionar seu certificado digital e <strong>emitir NFC-e facilmente direto do sistema</strong>, sem necessidade de contratar um sistema adicional. Além disso, você pode emitir <strong>NF-e com NFC-e de venda referenciada</strong> direto pelo sistema.
        </p>
      </div>
      
      <!-- Imagem -->
      <div class="flex justify-center lg:justify-end" data-aos="fade-down">
        <img  src="images/emissao-nfce.webp" class="max-w-full h-auto drop-shadow-xl">
      </div>
    </div>
  </div>
</section>

<!-- Venda Fácil -->
<section class="bg-gray-100 py-10">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Imagem -->
      <div class="flex justify-center lg:justify-end order-2 lg:order-1" data-aos="fade-down">
        <img  src="images/pdv-compacto.webp" class="max-w-full h-auto drop-shadow-xl">
      </div>

      <!-- Texto -->
      <div class="order-1 lg:order-2" data-aos="fade-down">

        <h2 class="text-5xl font-bold text-gray-900 mb-6">
        Venda fácil
        </h2>

        <p class="text-lg text-gray-700 mb-4">
        Com o PDV da Big Informática você otimiza seu atendimento e <strong>vende mais em menos tempo</strong>.
        </p>

        <p class="text-lg text-gray-700 mb-4">
        Use o <strong>leitor de código de barras, busca inteligente</strong> ou a divisão por categorias para adicionar produtos ao caixa e finalizar vendas usando diversas <strong>formas de pagamento</strong>.
        </p>

        <p class="text-lg text-gray-700 mb-4">
        Além de <strong>leitores</strong> e <strong>impressoras não fiscais</strong>, é possível conectar outros equipamentos como <strong>balanças de checkout</strong> e <strong>gavetas de dinheiro</strong> montando assim um PDV <strong>compacto e prático</strong>.
        </p>  
      </div>
    </div>
  </div>
</section>

<!-- Controle de Caixa e estoque -->
<section class="bg-gray-100 py-24 scroll-mt-24"> 
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Texto -->
      <div data-aos="fade-down">
        <h2 class="text-5xl font-bold text-gray-900 mb-6">
        Controle de caixa e estoque
        </h2>

        <p class="text-lg text-gray-700 mb-4">
          O Big Informática PDV foi desenvolvido para trazer <strong>praticidade</strong> à sua rotina e te dar mais <strong>controle</strong> sobre seu comércio.
        </p>

        <p class="text-lg text-gray-700 mb-4">
          Você pode fazer fechamentos diretamente no caixa, <strong>acompanhar vendas</strong> e ver <strong>relatórios</strong> por dispositivo e período para tomar decisões mais acertivas.
        </p>

        <p class="text-lg text-gray-700 mb-4">
          Saiba <strong>quais produtos vendem mais</strong> e nunca fique <strong>sem estoque</strong> com o <strong>alerta</strong> de estoque mínimo.
        </p>
      </div>
      
      <!-- Imagem -->
      <div class="flex justify-center lg:justify-end" data-aos="fade-down">
        <img  src="images/reports.webp" class="max-w-full h-auto drop-shadow-xl">
      </div>
    </div>
  </div>
</section>

<!-- Delivery -->
<section class="bg-gray-100 py-10">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Imagem -->
      <div class="flex justify-center lg:justify-end order-2 lg:order-1" data-aos="fade-down">
        <img  src="images/delivery.gif" class="max-w-full h-auto">
      </div>

      <!-- Texto -->
      <div class="order-1 lg:order-2" data-aos="fade-down">

        <h2 class="text-5xl font-bold text-gray-900 mb-6">
        Controle de Delivery
        </h2>

        <p class="text-lg text-gray-700 mb-4">
        Com o Big Informática PDV você pode <strong>controlar seus pedidos de delivery</strong>, configurar informações de pagamento e entrega, e acompanhar a situação dos pedidos.
        </p>

        <p class="text-lg text-gray-700 mb-4">
        Aproveite a integração com <strong>iFood</strong> e <strong>Catálogo Online</strong> e centralize o cadastro de produtos e a gestão de pedidos em um único local, mantendo as informações de todas as plataformas <strong>atualizadas</strong> de forma fácil.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Cadastro de Usuários -->
<section class="bg-gray-100 py-24 scroll-mt-24"> 
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Texto -->
      <div data-aos="fade-down">
        <h2 class="text-5xl font-bold text-gray-900 mb-6">
        Cadastro de usuários
        </h2>

        <p class="text-lg text-gray-700 mb-4">
        Crie <strong>usuários ilimitados</strong>. Sejam eles do tipo <strong>Administrador</strong>, <strong>Caixa</strong> ou <strong>Atendente</strong>, as configurações e informações no sistema ficarão disponíveis de acordo com a necessidade de cada <strong>perfil</strong>.
        </p>
      </div>
      
      <!-- Imagem -->
      <div class="flex justify-center lg:justify-end" data-aos="fade-down">
        <img  src="images/usuarios.png" class="max-w-full h-auto drop-shadow-xl">
      </div>
    </div>
  </div>
</section>

<!-- Mesas Comandas -->
<section class="bg-gray-100 py-10">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Imagem -->
      <div class="flex justify-center lg:justify-end order-2 lg:order-1" data-aos="fade-down">
        <img  src="images/mesas-comandas.png" class="max-w-full h-auto">
      </div>

      <!-- Texto -->
      <div class="order-1 lg:order-2" data-aos="fade-down">

        <h2 class="text-5xl font-bold text-gray-900 mb-6">
        Mesas e comandas
        </h2>

        <p class="text-lg text-gray-700 mb-4">
        Configure conforme seu estabelecimento trabalha, seja com atendimento em <strong>mesas</strong> ou por <strong>comandas</strong>.
        </p>

        <p class="text-lg text-gray-700 mb-4">
        Com diversos recursos como o <strong>atendimento avulso</strong>, a <strong>transferência de produtos</strong> além do <strong>cadastro de taxas de entrega</strong>.
        </p>
      </div>
    </div>
  </div>
</section>

<?php 
    include 'includes/footer.php' 
?>
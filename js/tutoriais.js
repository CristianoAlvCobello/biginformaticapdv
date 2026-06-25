
        const tutorialData = [
            {
                id: "caixa",
                title: "Caixa",
                tutorials: [
                    {
                        title: "Configurar abertura de gaveta",
                        url: "tutoriais/caixa/configurar-abertura-de-gaveta.php"
                    },
                    {
                        title: "Cadastro de produtos multissabor",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Excluir venda",
                        url: "desenvolvimento.php"    
                    },
                    {
                        title: "Solicitar CPF na nota fiscal",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Exibir a quantidade de estoque em cada produto",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Exibir apenas produtos com estoque",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Abertura e Fechamento de Caixa",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Recebimento de crediário",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Produtos com complementos",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Realizando uma venda rápida",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Pagamentos via Pix",
                        url: "desenvolvimento.php"
                    }
                ]
            },
            {
                id: "catalogo-online",
                title: "Catálogo Online",
                tutorials: [
                    {
                        title: "Configurar pagamento com Conta Digital",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Pedidos no Catálogo Online",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Configuração do Catálogo Online",
                        url: "desenvolvimento.php"
                    }
                ]
            },
              {
                id: "configuracoes",
                title: "Configurações",
                tutorials: [
                    {
                        title: "ECONF (Evento de Conciliação Financeira)",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Como configurar a balança de checkout",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Configurar balança etiquetadora",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Compartilhar dados entre multiplos dispositivos",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Como configurar restições de acesso",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Autenticação para transferir produtos entre mesas",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Inserir Certificado Digital pela página da conta",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Configurar Pontos de impressão para pedidos",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Configurar impressão automática de comprovantes",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Preenchimento manual das informações de pagamento na NFC-e",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Cadastro de usuários",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Como referenciar NFC-e na NF-e",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Configurar mesas e comandas",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Primeiros Passos",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Configurar Chave Pix",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Configuração de impressora",
                        url: "desenvolvimento.php"
                    }
                ]
            },
            {
                id: "estoque",
                title: "Estoque",
                tutorials: [
                    {
                        title: "Balanço de estoque",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Entrada manual no estoque",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Importação de nota fiscal",
                        url: "desenvolvimento.php"
                    }
                ]
            },
            {
                id: "integracoes",
                title: "Integrações",
                tutorials: [
                    {
                        title: "Vinculação no Consulta Preço",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Vinculação com o Pesagem Automática",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Vinculação no Monitor de Cozinha",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Módulo Delivery",
                        url: "desenvolvimento.php"
                    },
                    {
                        title: "Integração com iFood",
                        url: "desenvolvimento.php"
                    }
                ]
            },
            {
                id: "menu-digital",
                title: "Menu Digital",
                tutorials: [
                    {
                        title: "Configuração do Menu Digital",
                        url: "desenvolvimento.php"
                    }
                ]
            },
            {
                id: "relatorios",
                title: "Relatórios",
                tutorials: [
                    {
                        title: "Exportação de XML",
                        url: "desenvolvimento.php"
                    }
                ]
            }
        ];

        const sidebarMenu = document.getElementById('sidebar-menu');
        const tutorialsContainer = document.getElementById('tutorials-container');
        const searchInput = document.getElementById('searchInput');

        function renderSidebar() {
            sidebarMenu.innerHTML = tutorialData.map(section => `
                <a
                    href="#${section.id}"
                    class="sidebar-link block px-4 py-2 rounded-lg transition hover:bg-red-400 hover:text-black"
                    data-target="${section.id} cursor-pointer"
                >
                    ${section.title}
                </a>
            `).join('');
        }

        function renderSections() {

            tutorialsContainer.innerHTML = tutorialData.map(section => `
                <section
                    id="${section.id}"
                    class="tutorial-section scroll-mt-34"
                >
                    <div class="mb-5">
                        <h2 class="text-3xl font-bold text-red-600">
                            ${section.title}
                        </h2>

                        <div class="w-20 h-1 bg-red-600 rounded mt-2"></div>
                    </div>

                    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-4 justify-items-center cursor-pointer">
                        ${section.tutorials.map(tutorial => `
                            <a
                                href="${tutorial.url}"
                                class="tutorial-card bg-white border border-red-100 rounded-xl p-4 shadow-sm hover:shadow-md hover:border-red-600 transition flex items-center text-center justify-center min-h-[100px] w-full"
                                data-title="${tutorial.title.toLowerCase()}"
                            >
                                <h3 class="font-semibold text-gray-800">
                                    ${tutorial.title}
                                </h3>
                            </a>
                        `).join('')}
                    </div>
                </section>
            `).join('');
        }

        renderSidebar();
        renderSections();

        // Pesquisa
        searchInput.addEventListener('input', function () {

            const search = this.value.toLowerCase();

            document.querySelectorAll('.tutorial-section').forEach(section => {

                let visibleCards = 0;

                section.querySelectorAll('.tutorial-card').forEach(card => {

                    const title = card.dataset.title;

                    const visible = title.includes(search);

                    card.style.display = visible ? 'block' : 'none';

                    if (visible) visibleCards++;
                });

                section.style.display =
                    visibleCards > 0 ? 'block' : 'none';
            });
        });

        sections.forEach(section => {
            observer.observe(section);
        });

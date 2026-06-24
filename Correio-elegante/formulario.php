<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Enviar Cartinha</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container-formulario">

        <form action="processar.php" method="POST" class="formulario">

            <h1>Enviar Cartinha</h1>

            <!-- BLOCO 1 -->

            <div class="bloco">

                <label>
                    Escolha uma frase
                </label>

                <select name="modelo" required>

                    <option value="">
                        Selecione
                    </option>

                    <option value="modelo1">
                        Chega de mentiras, de negar o meu desejo,
                        eu te quero mais que tudo, eu preciso do seu beijo
                    </option>

                    <option value="modelo2">
                        Exagerado, jogado aos teus pés, eu sou mesmo exagerado
                    </option>

                    <option value="modelo3">
                       Você é assim
					   Um sonho pra mim
        			   E quando eu não te vejo
        			   Eu penso em você	
                    </option>

                    <option value="modelo4">
                        Me juntaria pra te amar, Nos teus cabelos me enrolar
                        Mais enrolado que eu já tô nesse momento
                    </option>

                    <option value="modelo5">
                        Eu só quero amar você e quando amanhecer,
                        Eu quero acordar do seu lado
                    </option>

                    <option value="modelo6">
                        Diga pra mim que é real, que eu te prometo meu melhor
                        Fala pra mim o que eu quero ouvir, Que tu sentiu o que eu senti
                    </option>

                    <option value="modelo7">
                       Vi que era amor
					   Quando te achei em mim
					   E me perdi em você
                    </option>

                    <option value="modelo8">
                        Te espero para ver se você vem
						Não te troco nesta vida por ninguém
						Porque eu te amo
                    </option>

                    <option value="modelo9">
                        Que o meu amor
						Não será passageiro
						Te amarei de janeiro a janeiro.
                    </option>

                    <option value="modelo10">
                        Eu sei que vou te amar por toda a minha vida.
                    </option>

                    <option value="modelo11">
                       Deixa eu dizer que te amo
                        Deixa eu gostar de você
                        Isso me acalma, me acolhe 
                        a alma
                    </option>

                    <option value="modelo12">
                        Quantas cartas de amor são necessárias pra convencer você a se mudar pra minha área, hein?
                    </option>

                    <option value="modelo13">
                        Como que eu vou dizer pra ela?
                        Que eu gosto do seu cheiro
                        Da cor do seu cabelo
                        Que ela faz minha pupila dilatar
                    </option>

                    <option value="modelo14">
                        Eu quero dizer pra ele
                        Que a rima fez efeito
                        Agora penso o dia inteiro
                        Só ele faz minha pupila dilatar
                    </option>

                    <option value="modelo15">
                       Talvez você nem saiba, mas alguém sempre procura você com os olhos.
                    </option>

                    <option value="modelo16">
                        Se você soubesse quantas vezes eu pensei em puxar assunto...
                    </option>

                    <option value="modelo17">
                        Seu sorriso deveria vir com aviso de distração.
                    </option>

                    <option value="modelo18">
                        A melhor parte do meu dia às vezes é te encontrar por acaso.
                    </option>

                    <option value="modelo19">
                       Engraçado como alguém pode ocupar tantos pensamentos sem nem saber.
                    </option>

                    <option value="modelo20">
                        Você tem algo difícil de explicar e impossível de ignorar.
                    </option>

                    <option value="modelo21">
                        Talvez a gente devesse parar de ser desconhecidos.
                    </option>

                    <option value="modelo22">
                        Eu quero você para sempre, você e eu todos os dias
                    </option>

                    <option value="modelo23">
                        Às vezes, a pessoa certa está diante de nós o tempo todo.
                    </option>

                    <option value="modelo24">
                        Você me fez acreditar que eu mereço ser amada.
                    </option>

                    <option value="modelo25">
                        Com você a minha vida tem mais cor
                    </option>

                </select>

            </div>

            <!-- BLOCO 2 -->

            <div class="bloco">

                <label>
                    Quem está enviando?
                </label>

                <input
                    type="text"
                    name="de"
                    maxlength="22"
                    placeholder="Digite Nome e Sobrenome"
                >

                <div class="checkbox-area">

                    <input
                        type="checkbox"
                        id="nao_informar_de"
                        name="nao_informar_de"
                    >

                    <label for="nao_informar_de">
                        Desejo não informar
                    </label>

                </div>

            </div>

            <!-- BLOCO 3 -->

            <div class="bloco">

                <label>
                    Turma
                </label>

                <select name="categoria">

                    <option value="">
                        Selecione
                    </option>

                    <option value="1° A">
                        1° A
                    </option>

                    <option value="1° B">
                        1° B
                    </option>

                    <option value="1° C">
                        1° C
                    </option>

                    <option value="1° D">
                        1° D
                    </option>

                    <option value="2° A">
                        2° A
                    </option>

                    <option value="2° B">
                        2° B
                    </option>

                    <option value="2° C">
                        2° C
                    </option>

                    <option value="2° D">
                        2° D
                    </option>

                    <option value="3° A">
                        3° A
                    </option>

                    <option value="3° B">
                        3° B
                    </option>

                    <option value="3° C">
                        3° C
                    </option>

                    <option value="3° D">
                        3° D
                    </option>

                </select>

                <div class="checkbox-area">

                    <input
                        type="checkbox"
                        id="nao_informar"
                        name="nao_informar"
                    >

                    <label for="nao_informar">
                        Desejo não informar
                    </label>

                </div>

            </div>

            <!-- BLOCO 4 -->

            <div class="bloco">

                <label>
                    Quem irá receber?
                </label>

                <input
                    type="text"
                    name="para"
                    maxlength="22"
                    placeholder="Digite Nome e Sobrenome"
                    required
                >

            </div>

            <!-- BLOCO 5 -->

            <div class="bloco">

                <label>
                    Turma
                </label>

                <select name="mensagem_final" required>

                <option value="">
                        Selecione
                    </option>

                    <option value="1° A">
                        1° A
                    </option>

                    <option value="1° B">
                        1° B
                    </option>

                    <option value="1° C">
                        1° C
                    </option>

                    <option value="1° D">
                        1° D
                    </option>

                    <option value="2° A">
                        2° A
                    </option>

                    <option value="2° B">
                        2° B
                    </option>

                    <option value="2° C">
                        2° C
                    </option>

                    <option value="2° D">
                        2° D
                    </option>

                    <option value="3° A">
                        3° A
                    </option>

                    <option value="3° B">
                        3° B
                    </option>

                    <option value="3° C">
                        3° C
                    </option>

                    <option value="3° D">
                        3° D
                    </option>

                </select>

            </div>

            <button type="submit">

                Gerar Cartinha

            </button>

        </form>

    </div>

</body>

</html>
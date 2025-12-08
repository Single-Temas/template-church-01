<section class="py-20" id="contato" x-data="{ formType: 'contact' }">

    <div class="container">

        <div class="flex justify-center">

            <div class="shadow-lg border rounded-2xl overflow-hidden relative grid grid-cols-2">
                <div class="w-[1px] h-5 top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 absolute bg-black/80"></div>

                <button class="text-sm hover:text-white bg-color-primary-hover py-2 px-4"
                    x-on:click="formType = 'contact'"
                    x-bind:class="formType == 'contact' ? 'text-white font-black bg-color-primary' : 'font-normal'">
                    Contato
                </button>

                <button class="text-sm hover:text-white bg-color-primary-hover py-2 px-4"
                    x-on:click="formType = 'members'"
                    x-bind:class="formType == 'members' ? 'text-white font-black bg-color-primary' : 'font-normal'">
                    Membros
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-16">

            <div class="overflow-hidden relative px-4 lg:px-20">

                <div class="w-full h-full top-0 left-0 shadow-lg rounded-3xl absolute flex flex-col justify-between bg-color-primary p-10"
                    x-show="formType == 'contact' ? false : true" x-cloak x-transition:enter="transition duration-500"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition duration-500" x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="-translate-x-full">
                    <div>
                        <h4 class="text-2xl font-bold text-white">
                            Seja membro
                        </h4>

                        <p class="text-sm text-white">
                            Seja um membro da nossa igreja e participe de todas as atividades. <br />
                            Retoraremos o contato o mais breve possível.
                        </p>
                    </div>

                    <div>
                        <p class="text-xs text-white">
                            Conheça as nossas redes sociais <br />
                            e fique por dentro de todas as novidades.
                        </p>

                        <ul class="flex items-center gap-x-2 mt-6">
                            <?php if (get_field('instagram', 'option')): ?>
                                <li>
                                    <a class="flex items-center" href="<?php echo get_field('instagram', 'option'); ?>"
                                        target="_blank" rel="noreferrer noopener">
                                        <?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-6 h-6 fill-white')); ?>

                                        <span style="font-size:0">
                                            Instagram
                                        </span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_field('facebook', 'option')): ?>
                                <li>
                                    <a class="flex items-center" href="<?php echo get_field('facebook', 'option'); ?>"
                                        target="_blank" rel="noreferrer noopener">
                                        <?php echo get_template_part('template-parts/icons/content', 'facebook', get_icon_setting('w-6 h-6 fill-white')); ?>

                                        <span style="font-size:0">
                                            Facebook
                                        </span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_field('youtube', 'option')): ?>
                                <li>
                                    <a class="flex items-center" href="<?php echo get_field('youtube', 'option'); ?>"
                                        target="_blank" rel="noreferrer noopener">
                                        <?php echo get_template_part('template-parts/icons/content', 'youtube', get_icon_setting('w-6 h-6 fill-white')); ?>

                                        <span style="font-size:0">
                                            Youtube
                                        </span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <form action="">

                    <div class="flex flex-col gap-6">

                        <div class="w-full flex flex-col gap-1">
                            <label class="text-sm font-black pl-4" for="name">
                                Nome completo:
                            </label>

                            <input class="input-field" type="text" name="nome" id="name"
                                placeholder="Digite o seu nome completo" />
                        </div>

                        <div class="w-full flex flex-col gap-1">
                            <label class="text-sm font-black pl-4" for="email">
                                E-mail:
                            </label>

                            <input class="input-field" type="email" name="email" id="email"
                                placeholder="Digite o seu e-mail" />
                        </div>

                        <div class="w-full flex flex-col gap-1">
                            <label class="text-sm font-black pl-4" for="phone">
                                Telefone ou Whatsapp com (DDD):
                            </label>

                            <input class="input-field" type="text" name="telefone" id="phone"
                                placeholder="Digite o seu telefone ou Whatsapp" />
                        </div>

                        <div class="w-full flex flex-col gap-1">
                            <label class="text-sm font-black pl-4" for="message">
                                Mensagem:
                            </label>

                            <textarea class="input-field" name="mensagem" id="message"
                                placeholder="Digite a sua mensagem"></textarea>
                        </div>

                        <div class="w-full">
                            <input class="btn-submit bg-color-primary" type="submit" value="Enviar" />
                        </div>
                    </div>
                </form>
            </div>

            <div class="overflow-hidden relative px-4 lg:px-20">

                <div class="w-full h-full top-0 left-0 shadow-lg rounded-3xl absolute flex flex-col justify-between bg-color-primary p-10"
                    x-show="formType == 'members' ? false : true" x-cloak x-transition:enter="transition duration-500"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition duration-500" x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full">

                    <div>
                        <h4 class="text-2xl font-bold text-white">
                            Entre em contato
                        </h4>

                        <p class="text-sm text-white">
                            Retoraremos o contato o mais breve possível.
                        </p>
                    </div>

                    <div>
                        <p class="text-xs text-white">
                            Conheça as nossas redes sociais <br />
                            e fique por dentro de todas as novidades.
                        </p>

                        <ul class="flex items-center gap-x-2 mt-6">
                            <?php if (get_field('instagram', 'option')): ?>
                                <li>
                                    <a class="flex items-center" href="<?php echo get_field('instagram', 'option'); ?>"
                                        target="_blank" rel="noreferrer noopener">
                                        <?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-6 h-6 fill-white')); ?>

                                        <span style="font-size:0">
                                            Instagram
                                        </span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_field('facebook', 'option')): ?>
                                <li>
                                    <a class="flex items-center" href="<?php echo get_field('facebook', 'option'); ?>"
                                        target="_blank" rel="noreferrer noopener">
                                        <?php echo get_template_part('template-parts/icons/content', 'facebook', get_icon_setting('w-6 h-6 fill-white')); ?>

                                        <span style="font-size:0">
                                            Facebook
                                        </span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_field('youtube', 'option')): ?>
                                <li>
                                    <a class="flex items-center" href="<?php echo get_field('youtube', 'option'); ?>"
                                        target="_blank" rel="noreferrer noopener">
                                        <?php echo get_template_part('template-parts/icons/content', 'youtube', get_icon_setting('w-6 h-6 fill-white')); ?>

                                        <span style="font-size:0">
                                            Youtube
                                        </span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <form action="">

                    <div class="flex flex-col gap-6">

                        <div class="w-full flex flex-col gap-1">
                            <label class="text-sm font-black pl-4" for="name">
                                Nome completo:
                            </label>

                            <input class="input-field" type="text" name="nome" id="name"
                                placeholder="Digite o seu nome completo" />
                        </div>

                        <div class="w-full flex flex-col gap-1">
                            <label class="text-sm font-black pl-4" for="email">
                                E-mail:
                            </label>

                            <input class="input-field" type="email" name="email" id="email"
                                placeholder="Digite o seu e-mail" />
                        </div>

                        <div class="w-full flex flex-col gap-1">
                            <label class="text-sm font-black pl-4" for="phone">
                                Telefone ou Whatsapp com (DDD):
                            </label>

                            <input class="input-field" type="text" name="telefone" id="phone"
                                placeholder="Digite o seu telefone ou Whatsapp" />
                        </div>

                        <div class="w-full flex flex-col gap-1">
                            <label class="text-sm font-black pl-4" for="convertido">
                                Você é convertido?
                            </label>

                            <select class="input-field" type="text" name="convertido" id="convertido"
                                placeholder="Selecione">
                                <option value="">Selecione</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>

                        <div class="w-full">
                            <input class="btn-submit bg-color-primary" type="submit" value="Enviar" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
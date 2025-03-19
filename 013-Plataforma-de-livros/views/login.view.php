<div class="mt-6 grid grid-cols-2 gap-2 ">

    <div class="border border-stone-700 rounded ">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
        <form class="px-4 py-6 space-y-4">
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Email</label>
                <input
                    type="text"
                    name="email" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Digite seu E-Mail...">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    name="password" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Digite sua senha...">
            </div>
            <button type="submit" class="border-stone-800 bg-stone-900 px-4 py-2 rounded-md border-2 hover:bg-stone-700">
                Logar
            </button>
        </form>
    </div>
    <div class="border border-stone-700 rounded ">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Resgistro</h1>
        <form class="px-4 py-6 space-y-4">
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Nome</label>
                <input
                    type="text"
                    name="text" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Digite seu nome..">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Email</label>
                <input
                    type="email"
                    name="email" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Digite seu e-mail...">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Confirme seu E-Mail</label>
                <input
                    type="email"
                    name="email" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="confirme seu e-mail...">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    name="password" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Digite sua senha...">
            </div>
            <button type="reset" class="border-stone-800 bg-stone-900 px-4 py-2 rounded-md border-2 hover:bg-stone-700">
                Cancelar
            </button>
            <button type="submit" class="border-stone-800 bg-stone-900 px-4 py-2 rounded-md border-2 hover:bg-stone-700">
                Registrar
            </button>
        </form>
    </div>


</div>
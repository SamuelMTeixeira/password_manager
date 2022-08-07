<x-app-layout>
    <x-slot name="title">Home</x-slot>

    <div class="py-12">

        <h3 class="text-xl font-rubik font-bold mb-5">Bem vindo de volta, {{ Auth::user()->name }}!</h3>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center gap-4">

            <!-- Vazamentos recentes -->
            <div class="bg-white shadow-lg p-6 rounded-2xl border-2 border-gray-50 w-2/4">
                <div class="flex flex-col">
                    <div>
                        <h2 class="font-bold text-gray-600 text-center">Vazamentos recentes</h2>
                    </div>
                    <div class="my-6">
                        <div class="flex gap-4 items-center">
                            <img src="{{ asset('img/info.jpg') }}"
                                alt="grafico" class="w-14 h-14">

                            <div>
                                <h4 class="text-2xl">La Poste Mobile</h4>
                                <p class="text-xs text-gray-500">Cerca de 533,886 contas comprometidas por conta de
                                    um ataque de ransomware</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full place-items-end text-right border-t-2 border-gray-100 mt-2">
                    <a href="https://securityaffairs.co/wordpress/133080/cyber-crime/la-poste-mobile-ransomware.html"
                        class="text-indigo-600 text-sm font-medium">Ver mais</a>
                </div>
            </div>

            <!-- Maiores violações -->
            <div
                class="w-2/4 flex flex-col min-w-0 break-words bg-white shadow-lg p-6 rounded-2xl border-2 border-gray-50">
                <div class="block w-full overflow-x-auto">
                    <h2 class="font-bold text-gray-600 text-center">Maiores vazamentos de contas</h2>
                    <table class="items-center w-full bg-transparent">
                        <tbody>
                            <tr>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center"><span class="ml-3 font-bold NaN">Verifications.io</span>
                                    </div>
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">763Mi</div>
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 min-w-140-px">
                                    <div class="flex items-center">
                                        <div class="relative w-10">
                                            <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                <div class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"
                                                    style="width: 90%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center"><span class="ml-3 font-bold NaN">Facebook</span>
                                    </div>
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">509Mi</div>
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 min-w-140-px">
                                    <div class="flex items-center">
                                        <div class="relative w-10">
                                            <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                                                <div class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"
                                                    style="width: 75%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center"><span class="ml-3 font-bold NaN">MySpace</span>
                                    </div>
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">359Mi</div>
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 min-w-140-px">
                                    <div class="flex items-center">
                                        <div class="relative w-10">
                                            <div class="overflow-hidden h-2 text-xs flex rounded bg-indigo-200">
                                                <div class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"
                                                    style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

        <!-- Minhas senhas -->
        <h3 class="text-xl font-rubik font-bold mt-7 mb-5">Minhas senhas</h3>

        <div class="flex flex-col">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th scope="col" class="p-4">
                                        <span class="sr-only">Checkbox</span>
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-gray-700 uppercase">
                                        <span class="sr-only">Icone</span>
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                        Serviço
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                        Email
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                        Senha
                                    </th>
                                    <th scope="col" class="p-4">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="hover:bg-gray-100">
                                    <td class="p-4 w-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-1" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
                                            <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="py-3 flex justify-center items-center">
                                        <img class="rounded-md h-8 w-8"
                                            src="https://cdn-icons-png.flaticon.com/512/124/124010.png"
                                            alt="icone serviço">
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                        Facebook</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap">
                                        testes@gmail.com</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                        <input class="border-none bg-transparent w-10 p-0 m-0" type="password"
                                            value="senha123" disabled>
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                        <a href="#" class="text-blue-600 hover:underline">Editar</a>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-100">
                                    <td class="p-4 w-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-2" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
                                            <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td class="py-3 flex justify-center items-center">
                                        <img class="rounded-md h-8 w-8"
                                            src="https://pt.apkshki.com/storage/2998/icon_5ea7eb2581363_2998.png"
                                            alt="icone serviço">
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                        Amazon</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap">
                                        testes2@gmail.com</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                        <input class="border-none bg-transparent w-10 p-0 m-0" type="password"
                                            value="senha123" disabled>
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                        <a href="#" class="text-blue-600 hover:underline">Editar</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <span class="w-full flex justify-center"><a
                    class="bg-azul-500 hover:bg-azul-200 font-medium font-rubik text-white text-center px-6 py-2 mt-3 rounded-md"
                    href="#"> Ver mais </a></span>
        </div>
    </div>


    </div>
</x-app-layout>
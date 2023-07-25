<x-alert />
<div class="flex flex-col mt-6 my-4">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th scope="col"
                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Assunto
                            </th>

                            <th scope="col"
                                class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Status
                            </th>



                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Descrição</th>

                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Ação</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                        <tr>
                            <td class="px-4 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $support->subject }}
                            </td>
                            <td class="px-12 py-2 text-sm font-medium whitespace-nowrap dark:text-white">
                                <x-status-support :status="$support->status" />
                            </td>
                            <td class="px-4 py-2 text-sm whitespace-nowrap text-gray-500 dark:text-gray-400">
                                {{ $support->body }}
                            </td>
                            <td class="px-4 py-2 text-sm whitespace-nowrap dark:text-white">
                                <div class="flex items-center">
                                    <form action="{{ route('supports.destroy', $support->id) }}" method="POST">
                                        @csrf()
                                        @method('DELETE')
                                        <button type="submit">Deletar</button>
                                    </form>
                                </div>
                            </td>


                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

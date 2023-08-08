import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import '../../DataTables/datatables.css';
import '../../DataTables/datatables.min.css';
import '../../DataTables/datatables';
export default function Dashboard({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900"><table id="myTable" className="display">
                    <thead>
                        <th>Nama Voucher</th>
                        <th>Kode</th>
                        <th>Toko</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}

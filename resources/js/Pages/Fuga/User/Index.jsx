import { Head } from '@inertiajs/react'

export default function Welcome({ users }) {
    return (
        <>
            <Head title="Welcome" />
            <h1>Welcome</h1>
            {users.map((user) => {
                return (
                    <p key={user.email}>{user.name}</p>
                )
            })}
<button className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Enable
</button>
            <p>Hello, welcome to your first Inertia app!</p>
        </>
    )
}

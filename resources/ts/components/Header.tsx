import { Link } from '@inertiajs/react';
import React from 'react';
import route from 'ziggy-js';

function Header(): React.JSX.Element {
  return (
    <header className="py-4 bg-white shadow">
      <nav className="container mx-auto px-4 flex items-center justify-between">
        <Link href="/" className="font-bold text-xl">
          My Info Site
        </Link>
        <ul className="flex space-x-4">
          <li>
            <Link
              href={route('fuga.home.index')}
              className="text-gray-700 hover:text-gray-900"
            >
              Home
            </Link>
          </li>
          <li>
            <Link
              href={route('fuga.home.about')}
              className="text-gray-700 hover:text-gray-900"
            >
              About
            </Link>
          </li>
          <li>
            <Link href="#" className="text-gray-700 hover:text-gray-900">
              Services
            </Link>
          </li>
          <li>
            <Link href="#" className="text-gray-700 hover:text-gray-900">
              Contact
            </Link>
          </li>
        </ul>
      </nav>
    </header>
  );
}

export default Header;

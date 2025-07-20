import React, { useEffect, useState } from 'react';

export default function AlertWelcome() {
  const [show, setShow] = useState(true);

  useEffect(() => {
    const timer = setTimeout(() => setShow(false), 8000);
    return () => clearTimeout(timer);
  }, []);

  if (!show) return null;

  return (
    <div className="fixed inset-0 z-50 flex items-center justify-center bg-black/40">
      <div className="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 text-center border-2 border-green-500 animate-fade-in">
        <h2 className="text-2xl font-bold mb-2 text-green-700">Selamat Datang!</h2>
        <p className="mb-4 text-gray-700">Selamat datang di website <span className="font-semibold text-green-600">Kampung Skouw Yambe</span>.<br/>Temukan informasi sejarah, potensi, dan keunikan kampung kami.</p>
        <p className="mb-6 text-sm text-gray-500">Untuk akses internet, silakan klik tombol <span className="font-semibold text-blue-600">Login</span> di pojok kanan atas.</p>
        <button onClick={() => setShow(false)} className="mt-2 px-6 py-2 rounded-lg bg-gradient-to-r from-green-500 to-blue-500 text-white font-bold shadow hover:from-blue-600 hover:to-green-600 transition">Tutup</button>
      </div>
    </div>
  );
} 
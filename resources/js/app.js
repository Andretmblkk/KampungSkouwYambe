import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
import AlertWelcome from './components/ui/AlertWelcome';

const alertDiv = document.createElement('div');
document.body.appendChild(alertDiv);
createRoot(alertDiv).render(<AlertWelcome />);

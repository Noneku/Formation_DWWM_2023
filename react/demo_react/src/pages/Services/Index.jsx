import React from "react";
import { Link, Outlet } from "react-router-dom";

const Services = () => {
  return (
    <div>
      <h1>Nos Services</h1>

      <nav>
        <Link to="/Services/Marketing">Marketing</Link>
        <Link to="/Services/Developpement">Developpement</Link>
      </nav>
      <Outlet />
    </div>
  );
};

export default Services;

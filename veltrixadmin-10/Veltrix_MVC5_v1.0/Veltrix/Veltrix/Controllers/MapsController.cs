using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Veltrix.Controllers
{
    public class MapsController : Controller
    {
        [ActionName("maps-google")]
        public ActionResult mapsgoogle()
        {
            return View();
        }

        [ActionName("maps-vector")]
        public ActionResult mapsvector()
        {
            return View();
        }
    }
}
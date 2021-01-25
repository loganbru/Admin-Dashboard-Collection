using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Veltrix.Controllers
{
    public class ChartsController : Controller
    {
        [ActionName("charts-morris")]
        public ActionResult chartsmorris()
        {
            return View();
        }

        [ActionName("charts-chartist")]
        public ActionResult chartschartist()
        {
            return View();
        }

        [ActionName("charts-chartjs")]
        public ActionResult chartschartjs()
        {
            return View();
        }


        [ActionName("charts-flot")]
        public ActionResult chartsflot()
        {
            return View();
        }

        [ActionName("charts-knob")]
        public ActionResult chartsknob()
        {
            return View();
        }

        [ActionName("charts-sparkline")]
        public ActionResult chartssparkline()
        {
            return View();
        }
    }
}
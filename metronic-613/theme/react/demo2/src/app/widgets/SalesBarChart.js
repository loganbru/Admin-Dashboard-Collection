import React, { useEffect, useMemo, useRef } from "react";
import { useSelector } from "react-redux";
import { Chart } from "chart.js";
import { metronic } from "../../_metronic";

export default function SalesBarChart({ title, desc }) {
  const ref = useRef();
  const { successColor } = useSelector(state => ({
    successColor: metronic.builder.selectors.getConfig(
      state,
      "colors.state.success"
    )
  }));

  const data = useMemo(
    () => ({
      labels: [
        "Label 1",
        "Label 2",
        "Label 3",
        "Label 4",
        "Label 5",
        "Label 6",
        "Label 7",
        "Label 8",
        "Label 9",
        "Label 10",
        "Label 11",
        "Label 12",
        "Label 13",
        "Label 14",
        "Label 15",
        "Label 16"
      ],
      datasets: [
        {
          // label: 'dataset 1',
          backgroundColor: successColor,
          data: [15, 20, 25, 30, 25, 20, 15, 20, 25, 30, 25, 20, 15, 10, 15, 20]
        },
        {
          // label: 'dataset 2',
          backgroundColor: "#f3f3fb",
          data: [15, 20, 25, 30, 25, 20, 15, 20, 25, 30, 25, 20, 15, 10, 15, 20]
        }
      ]
    }),
    [successColor]
  );

  useEffect(() => {
    const chart = new Chart(ref.current, {
      data,
      type: "bar",
      options: {
        title: { display: false },
        tooltips: {
          intersect: false,
          mode: "nearest",
          xPadding: 10,
          yPadding: 10,
          caretPadding: 10
        },
        legend: { display: false },
        responsive: true,
        maintainAspectRatio: false,
        barRadius: 4,
        scales: {
          xAxes: [{ display: false, gridLines: false, stacked: true }],
          yAxes: [{ display: false, stacked: true, gridLines: false }]
        },
        layout: { padding: { left: 0, right: 0, top: 0, bottom: 0 } }
      }
    });

    return () => {
      chart.destroy();
    };
  }, [data]);

  return (
    <div className="kt-widget14">
      <div className="kt-widget14__header kt-margin-b-30">
        <h3 className="kt-widget14__title">{title}</h3>
        <span className="kt-widget14__desc">{desc}</span>
      </div>
      <div className="kt-widget14__chart" style={{ height: "120px" }}>
        <canvas ref={ref} />
      </div>
    </div>
  );
}

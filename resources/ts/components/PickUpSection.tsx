import React from "react";

type ItemProps = {
    image: string;
}

const PickUpItem = ({ image }: ItemProps) => {
  return (
    <div className="w-full h-full">
      <img src={image} alt="" className="object-cover w-full h-full rounded" />
    </div>
  );
};

type itemObj = {
    image: string;
}
type SectionProps = {
    title: string;
    items: itemObj[];
}

export const PickUpSection = ({ title, items }:SectionProps) => {
  return (
    <div className="w-1/2 p-4">
      <h1 className="text-2xl font-bold mb-4">{title}</h1>
      <div className="grid grid-cols-3 gap-4">
        {items.map((item, index) => (
          <PickUpItem key={index} image={item.image} />
        ))}
      </div>
    </div>
  );
};

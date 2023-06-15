import React from 'react';

interface ItemProps {
  image: string;
}

function PickUpItem({ image }: ItemProps): React.JSX.Element {
  return (
    <div className="w-full h-full">
      <img src={image} alt="" className="object-cover w-full h-full rounded" />
    </div>
  );
}

interface ItemObj {
  image: string;
}
interface SectionProps {
  title: string;
  items: ItemObj[];
}

function PickUpSection({ title, items }: SectionProps): React.JSX.Element {
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
}

export default PickUpSection;

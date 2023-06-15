import React from 'react';
import PickUpSection from '../../../components/PickUpSection';
import Header from '../../../components/Header';

export default function About({ users }): React.JSX.Element {
  users.map((user) => {
    console.log(user);
    return user;
  });

  interface ItemObj {
    image: string;
  }
  const pickUpTopics: ItemObj[] = [];
  for (let i = 0; i < 15; i++) {
    pickUpTopics.push({
      image:
        'https://s3-ap-northeast-1.amazonaws.com/storage.shukatsu-ichiba.com/media/2019/10/%E3%82%A2%E3%82%A412933_720x550.png',
    });
  }

  return (
    <div className="bg-gray-200">
      <Header />
      <main className="container mx-auto px-4 py-8">
        <div className="flex">
          <PickUpSection title="PICK UP TOPICS" items={pickUpTopics} />
        </div>
      </main>
      <footer className="bg-gray-100 py-4 mt-8">
        <div className="container mx-auto px-4 text-center text-gray-500">
          &copy; 2023 My Info Site. All rights reserved.
        </div>
      </footer>
    </div>
  );
}

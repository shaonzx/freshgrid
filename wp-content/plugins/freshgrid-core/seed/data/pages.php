<?php
/**
 * Placeholder page content. Each section is [ heading, body ]. A body item is a
 * paragraph string, or an array for a bullet list. Replace the "00" address,
 * phone and email placeholders before launch.
 *
 * @package FreshGridCore
 */

defined( 'ABSPATH' ) || exit;

return array(
	'about-us'             => array(
		'title'    => 'About Us',
		'sections' => array(
			array(
				'',
				array(
					'Srijon FreshGrid is a grocery and delivery service from Srijon Tech Limited, built for the way Dhaka actually shops. We bring fresh vegetables, fruit, fish, meat and pantry staples from farms and trusted wholesalers straight to homes, restaurants and offices.',
				),
			),
			array(
				'What we do',
				array(
					'We operate across four connected lines: wholesale supply, retail home delivery, smart commerce tools for ordering, and our own delivery network. Together they let us buy closer to the source and pass the difference on to you.',
				),
			),
			array(
				'What we care about',
				array(
					array(
						'Freshness: produce is sourced daily and packed on the morning of delivery.',
						'Fair prices: clear pricing with no hidden charges at your door.',
						'Local farmers: we buy directly from Bangladeshi growers wherever we can.',
						'Reliability: if something is not right, we make it right.',
					),
				),
			),
			array(
				'Talk to us',
				array(
					'Have a question or a suggestion? [fg_link to="contact"]Contact our team[/fg_link], or ask about [fg_link to="wholesale"]wholesale supply[/fg_link] for your business.',
				),
			),
		),
	),

	'contact'              => array(
		'title'    => 'Contact',
		'sections' => array(
			array(
				'',
				array( 'We would love to hear from you. For order questions, please keep your order number handy.' ),
			),
			array(
				'Our office',
				array( 'Srijon FreshGrid, House 00, Road 00, Dhanmondi, Dhaka 1205, Bangladesh' ),
			),
			array(
				'Phone and email',
				array(
					array(
						'Hotline: +880 1XXX-XXXXXX',
						'WhatsApp: +880 1XXX-XXXXXX',
						'Email: support@freshgrid.example',
					),
				),
			),
			array(
				'Hours',
				array( 'Customer support is open every day, 8:00 am to 10:00 pm.' ),
			),
			array(
				'Business enquiries',
				array( 'For bulk supply, see our [fg_link to="wholesale"]Wholesale page[/fg_link].' ),
			),
		),
	),

	'wholesale'            => array(
		'title'    => 'Wholesale',
		'sections' => array(
			array(
				'',
				array( 'Srijon FreshGrid supplies restaurants, hotels, caterers, hostels, offices and retailers across Dhaka with consistent quality and dependable delivery.' ),
			),
			array(
				'Why buy wholesale with us',
				array(
					array(
						'Lower per-kg pricing on rice, dal, oil, onions, potatoes and more.',
						'Bulk pack sizes, from 25 kg sacks to 20 kg fruit crates.',
						'Scheduled daily or weekly delivery to your location.',
						'A dedicated contact person for your account.',
						'Monthly billing available for approved business customers.',
					),
				),
			),
			array(
				'How it works',
				array(
					array(
						'Send us your product list and expected quantities.',
						'We share a quotation within one working day.',
						'Confirm the order and choose your delivery schedule.',
						'We deliver, and you pay by cash on delivery or an agreed billing term.',
					),
				),
			),
			array(
				'Request a quote',
				array( 'Call +880 1XXX-XXXXXX or email wholesale@freshgrid.example with your business name, delivery area and product list. Small bulk orders can also be placed directly: look for the bulk pack sizes in our [fg_link to="shop"]shop[/fg_link].' ),
			),
		),
		'cta'      => array( 'Contact our wholesale team', 'contact' ),
	),

	'faq'                  => array(
		'title'    => 'FAQ',
		'sections' => array(
			array(
				'How do I place an order?',
				array( 'Browse the [fg_link to="shop"]shop[/fg_link], add items to your cart and go to checkout. You can order as a guest or create an account to track your orders.' ),
			),
			array(
				'Do I need an account?',
				array( 'No. Guest checkout is always available. With an account, you can see your order history in [fg_link to="my-account"]My Account[/fg_link] and check out faster.' ),
			),
			array(
				'How can I pay?',
				array( 'We currently accept Cash on Delivery. Online payment options will be added soon.' ),
			),
			array(
				'How much is delivery?',
				array( 'Delivery is ৳60 inside Dhaka and ৳120 outside Dhaka, and free on orders above ৳3,000. See [fg_link to="delivery-information"]Delivery Information[/fg_link].' ),
			),
			array(
				'How fresh is the produce?',
				array( 'Fresh items are sourced daily and packed on the morning of delivery. Fish and meat travel chilled.' ),
			),
			array(
				'Why did my final weight differ slightly?',
				array( 'Fish, meat and some vegetables vary naturally. We pack as close as possible to the weight you ordered and never charge above the listed price.' ),
			),
			array(
				'What if an item is damaged or wrong?',
				array( 'Tell the delivery person or call us within 24 hours. See our [fg_link to="return-refund-policy"]Return & Refund Policy[/fg_link].' ),
			),
			array(
				'Do you supply businesses?',
				array( 'Yes. See our [fg_link to="wholesale"]Wholesale page[/fg_link] for bulk pricing and scheduled delivery.' ),
			),
		),
	),

	'delivery-information' => array(
		'title'    => 'Delivery Information',
		'sections' => array(
			array(
				'Delivery charges',
				array(
					array(
						'Inside Dhaka: ৳60',
						'Outside Dhaka: ৳120',
						'Free delivery on orders above ৳3,000',
					),
				),
			),
			array(
				'Delivery time',
				array(
					array(
						'Inside Dhaka: same day for orders placed before 12:00 pm, otherwise the next day.',
						'Outside Dhaka: usually 2 to 4 working days.',
					),
					'Fish, meat and other perishable items may only be available inside Dhaka. We will call you if an item in your order cannot be delivered to your area.',
				),
			),
			array(
				'Before we arrive',
				array( 'Our delivery team will call the phone number you gave at checkout. Please keep your phone reachable and have the exact cash amount ready if possible.' ),
			),
			array(
				'Missed deliveries',
				array( 'If we cannot reach you after two attempts, we will contact you to reschedule. Perishable items may need to be reordered.' ),
			),
		),
	),

	'return-refund-policy' => array(
		'title'    => 'Return & Refund Policy',
		'sections' => array(
			array(
				'',
				array( 'We want you to be happy with every order. Please check your items when they arrive.' ),
			),
			array(
				'Fresh and perishable items',
				array( 'Vegetables, fruit, fish, meat and dairy can be returned at the door if they are damaged, spoiled or incorrect. If you notice a problem after delivery, contact us within 24 hours with your order number and a photo.' ),
			),
			array(
				'Packaged goods',
				array( 'Unopened packaged items can be returned within 3 days of delivery if they are damaged, expired or not what you ordered.' ),
			),
			array(
				'What we cannot accept',
				array(
					array(
						'Items that have been opened, used or cooked, unless they were faulty.',
						'Perishable items reported more than 24 hours after delivery.',
						'A change of mind on perishable items after delivery.',
					),
				),
			),
			array(
				'Refunds',
				array( 'Approved refunds are issued by bKash, Nagad or bank transfer within 3 to 7 working days, or as a replacement on your next order if you prefer.' ),
			),
			array(
				'How to request a return',
				array( '[fg_link to="contact"]Contact us[/fg_link] with your order number and the reason for the return.' ),
			),
		),
	),

	'privacy-policy'       => array(
		'title'    => 'Privacy Policy',
		'sections' => array(
			array(
				'',
				array( 'This policy explains what information Srijon FreshGrid, a venture of Srijon Tech Limited, collects and how it is used. This is placeholder text: have it reviewed before launch.' ),
			),
			array(
				'What we collect',
				array(
					array(
						'Your name, phone number, email address and delivery address.',
						'Your orders and account details, if you create an account.',
						'Basic technical data such as browser type and pages visited.',
					),
				),
			),
			array(
				'How we use it',
				array(
					array(
						'To process and deliver your orders and contact you about them.',
						'To provide customer support and improve our service.',
						'To meet legal and accounting obligations.',
					),
				),
			),
			array(
				'Who we share it with',
				array( 'We share only what is needed with delivery partners and service providers who help us run the store. We do not sell your personal information.' ),
			),
			array(
				'Cookies',
				array( 'We use cookies to keep your cart and login working and to understand how the site is used. You can control cookies in your browser settings.' ),
			),
			array(
				'Your choices',
				array( 'You can view and update your details in [fg_link to="my-account"]My Account[/fg_link], or [fg_link to="contact"]contact us[/fg_link] to ask for your data to be corrected or deleted.' ),
			),
		),
	),

	'terms-conditions'     => array(
		'title'    => 'Terms & Conditions',
		'sections' => array(
			array(
				'',
				array( 'By using this website and placing an order, you agree to these terms. This is placeholder text: have it reviewed before launch.' ),
			),
			array(
				'Orders',
				array( 'An order is confirmed when we accept it after checkout. We may cancel or change an order if an item is unavailable or a price is listed in error, and we will let you know if we do.' ),
			),
			array(
				'Prices and payment',
				array( 'Prices are in Bangladeshi Taka (BDT) and may change without notice. Delivery charges are shown at checkout. Payment is currently by Cash on Delivery.' ),
			),
			array(
				'Product weight and appearance',
				array( 'Fresh products vary naturally in size, weight and appearance. Images are for illustration.' ),
			),
			array(
				'Delivery',
				array( 'Delivery times are estimates. See [fg_link to="delivery-information"]Delivery Information[/fg_link] for details.' ),
			),
			array(
				'Returns',
				array( 'Returns and refunds follow our [fg_link to="return-refund-policy"]Return & Refund Policy[/fg_link].' ),
			),
			array(
				'Governing law',
				array( 'These terms are governed by the laws of Bangladesh. Disputes are subject to the courts of Dhaka.' ),
			),
		),
	),
);
